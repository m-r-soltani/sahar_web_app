<?php

function Insert_operator($name_namayandegi,$name,$name_khanevadegi,$code_meli,
                         $shomare_shenasname,$name_pedar,$tarikhe_tavalod,$madrake_tahsili,$reshteye_tahsili,
                         $ostan_tavalod,$shahr_tavalod,$telephone_hamrah,$telephone_mahale_sokonat,$address,
                         $email,$semat,$name_karbari,$ramze_obor,$t_karte_meli,$t_shenasname,$t_madrake_tahsili,$t_chehre){
    $res=Db::justexecute("INSERT INTO bnm_operator (name_namayandegi,name,name_khanevadegi,
    code_meli,shomare_shenasname,name_pedar,tarikhe_tavalod,madrake_tahsili,reshteye_tahsili,
    ostan_tavalod,shahr_tavalod,telephone_hamrah,telephone_mahale_sokonat,address,
    email,semat,name_karbari,ramze_obor,t_karte_meli,t_shenasname,t_madrake_tahsili,
    t_chehre) VALUES (
                    '$name_namayandegi','$name','$name_khanevadegi','$code_meli',
                    '$shomare_shenasname','$name_pedar','$tarikhe_tavalod','$madrake_tahsili',
                    '$reshteye_tahsili','$ostan_tavalod','$shahr_tavalod','$telephone_hamrah',
                    '$telephone_mahale_sokonat','$address','$email','$semat','$name_karbari',
                    '$ramze_obor','$t_karte_meli','$t_shenasname','$t_madrake_tahsili','$t_chehre')");
    return $res;
}
function Update_operator($id,$name_namayandegi,$name,$name_khanevadegi,$code_meli,
                         $shomare_shenasname,$name_pedar,$tarikhe_tavalod,$madrake_tahsili,$reshteye_tahsili,
                         $ostan_tavalod,$shahr_tavalod,$telephone_hamrah,$telephone_mahale_sokonat,$address,
                         $email,$semat,$name_karbari,$ramze_obor,$t_karte_meli,$t_shenasname,$t_madrake_tahsili,$t_chehre){
    $res=Db::justexecute("UPDATE bnm_operator SET name_namayandegi='$name_namayandegi',name='$name',
name_khanevadegi='$name_khanevadegi',code_meli='$code_meli',
                    shomare_shenasname='$shomare_shenasname',name_pedar='$name_pedar',
                    tarikhe_tavalod='$tarikhe_tavalod',madrake_tahsili='$madrake_tahsili',
                    reshteye_tahsili='$reshteye_tahsili',ostan_tavalod='$ostan_tavalod',
                    shahr_tavalod='$shahr_tavalod',telephone_hamrah='$telephone_hamrah',
                    telephone_mahale_sokonat='$telephone_mahale_sokonat',address='$address',
                    email='$email',semat='$semat',name_karbari='$name_karbari',
                    ramze_obor='$ramze_obor',t_karte_meli='$t_karte_meli',
                    t_shenasname='$t_shenasname',t_madrake_tahsili='$t_madrake_tahsili',t_chehre='$t_chehre'
 WHERE id = $id");
    return $res;
}
?>