<?php

function Insert_branch($name_sherkat,$shomare_sabt,$code_eghtesadi,$shenase_meli,$noe_sherkat,$website
    ,$email,$telephone1,$telephone2,$dornegar,$ostan,$shahr,$code_posti,$address,
                       $t_logo,$t_mohiti,$t_tablo,$t_code_eghtesadi,$t_rozname_tasis,$t_shenase_meli,$t_akharin_taghirat){
    $res=Db::justexecute("INSERT INTO bnm_namayandegi (name_sherkat,shomare_sabt,code_eghtesadi,
shenase_meli,noe_sherkat,website,email,telephone1,telephone2,dornegar,ostan,shahr,
code_posti,address,t_logo,t_mohiti,t_tablo,t_code_eghtesadi,t_rozname_tasis,t_shenase_meli,t_akharin_taghirat) 
VALUES ('$name_sherkat','$shomare_sabt','$code_eghtesadi','$shenase_meli','$noe_sherkat','$website','$email',
'$telephone1','$telephone2','$dornegar','$ostan','$shahr','$code_posti','$address','$t_logo','$t_mohiti',
'$t_tablo','$t_code_eghtesadi','$t_rozname_tasis','$t_shenase_meli','$t_akharin_taghirat')");
    return $res;
}
function Update_branch($id,$name_sherkat,$shomare_sabt,$code_eghtesadi,$shenase_meli,$noe_sherkat,$website
    ,$email,$telephone1,$telephone2,$dornegar,$ostan,$shahr,$code_posti,$address,
                       $t_logo,$t_mohiti,$t_tablo,$t_code_eghtesadi,$t_rozname_tasis,$t_shenase_meli,
                       $t_akharin_taghirat){
    $res=Db::justexecute("UPDATE bnm_namayandegi SET name_sherkat='$name_sherkat',shomare_sabt='$shomare_sabt',
code_eghtesadi='$code_eghtesadi',shenase_meli='$shenase_meli',noe_sherkat='$noe_sherkat',website='$website',
email='$email',telephone1='$telephone1',telephone2='$telephone2',dornegar='$dornegar',ostan='$ostan',shahr='$shahr',
code_posti='$code_posti',address='$address',t_logo='$t_logo',t_mohiti='$t_mohiti',t_tablo='$t_tablo',
t_code_eghtesadi='$t_code_eghtesadi',t_rozname_tasis='$t_rozname_tasis',t_shenase_meli='$t_shenase_meli',
t_akharin_taghirat='$t_akharin_taghirat'
 WHERE id = $id");
    return $res;
}
?>