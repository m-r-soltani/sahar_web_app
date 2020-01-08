<?php defined('__ROOT__') OR exit('No direct script access allowed');
class Helper{
    public static function file_upload($file,$path=__ROOT__.'public/images/panel_images/'){
        move_uploaded_file($file,$path);
    }
    public static function passwordhash($data){
        return password_hash($data,PASSWORD_DEFAULT);
    }
    public static function passwordverify($data,$phrase){
        return password_verify($data,$phrase);
    }
    public static function gregorian_to_jalali($gy,$gm,$gd,$mod=''){
        $g_d_m=array(0,31,59,90,120,151,181,212,243,273,304,334);
        if($gy>1600){
            $jy=979;
            $gy-=1600;
        }else{
            $jy=0;
            $gy-=621;
        }
        $gy2=($gm>2)?($gy+1):$gy;
        $days=(365*$gy) +((int)(($gy2+3)/4)) -((int)(($gy2+99)/100)) +((int)(($gy2+399)/400)) -80 +$gd +$g_d_m[$gm-1];
        $jy+=33*((int)($days/12053));
        $days%=12053;
        $jy+=4*((int)($days/1461));
        $days%=1461;
        if($days > 365){
            $jy+=(int)(($days-1)/365);
            $days=($days-1)%365;
        }
        $jm=($days < 186)?1+(int)($days/31):7+(int)(($days-186)/30);
        $jd=1+(($days < 186)?($days%31):(($days-186)%30));
        return($mod=='')?array($jy,$jm,$jd):$jy.$mod.$jm.$mod.$jd;
    }

    public static function jalali_to_gregorian($jy,$jm,$jd,$mod=''){
        if($jy>979){
            $gy=1600;
            $jy-=979;
        }else{
            $gy=621;
        }
        $days=(365*$jy) +(((int)($jy/33))*8) +((int)((($jy%33)+3)/4)) +78 +$jd +(($jm<7)?($jm-1)*31:(($jm-7)*30)+186);
        $gy+=400*((int)($days/146097));
        $days%=146097;
        if($days > 36524){
            $gy+=100*((int)(--$days/36524));
            $days%=36524;
            if($days >= 365)$days++;
        }
        $gy+=4*((int)($days/1461));
        $days%=1461;
        if($days > 365){
            $gy+=(int)(($days-1)/365);
            $days=($days-1)%365;
        }
        $gd=$days+1;
        foreach(array(0,31,(($gy%4==0 and $gy%100!=0) or ($gy%400==0))?29:28 ,31,30,31,30,31,31,30,31,30,31) as $gm=>$v){
            if($gd<=$v)break;
            $gd-=$v;
        }
        return($mod=='')?array($gy,$gm,$gd):$gy.$mod.$gm.$mod.$gd;
    }
    public static function convert_numbers($string,$toPersian=true){
        $e_num = array('0','1','2','3','4','5','6','7','8','9') ;
        $f_num = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹') ;
        if ($toPersian){return str_replace($e_num,$f_num,$string);
        }else{return str_replace($f_num,$e_num,$string);}
    }
    public static function upload_file($file){
        if(isset($_FILES['image'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $tmp1=explode('.',$_FILES['image']['name']);
            $end=end($tmp1);
            $file_ext=strtolower($end);
            $expensions= array("jpeg","jpg","png");
            if(in_array($file_ext,$expensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }

            if($file_size > 2097152) {
                $errors[]='File size must be excately 2 MB';
            }

            if(empty($errors)==true) {
                move_uploaded_file($file_tmp,"images/".$file_name);
                echo "Success";
            }else{
                print_r($errors);
            }
        }
    }
}