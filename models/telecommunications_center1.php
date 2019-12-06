<?php

function Insert_telecommunications_center($name,$ostan, $shahr ,$pish_shomare ,$shomare_tamas_markaz ,$shomare_tamas_mdf ,
                                          $address ,$masire_avale_faktorha ,$masire_dovome_faktorha ,$mizban ,$noe_gharardad){
    $res=Db::justexecute("INSERT INTO bnm_telecommunications_center (name,ostan,shahr,pish_shomare,shomare_tamas_markaz,
shomare_tamas_mdf,address,masire_avale_faktorha,masire_dovome_faktorha,mizban ,noe_gharardad) VALUES ('$name','$ostan', '$shahr','$pish_shomare',
'$shomare_tamas_markaz','$shomare_tamas_mdf',
                    '$address','$masire_avale_faktorha' ,'$masire_dovome_faktorha','$mizban','$noe_gharardad')");
    return $res;
}
function Update_telecommunications_center($id,$name,$ostan, $shahr ,$pish_shomare ,$shomare_tamas_markaz ,$shomare_tamas_mdf ,
                                          $address ,$masire_avale_faktorha ,$masire_dovome_faktorha ,$mizban ,$noe_gharardad){
    $res=Db::justexecute("UPDATE bnm_telecommunications_center SET name='$name',ostan='$ostan',shahr='$shahr',  WHERE id = $id");
    return $res;
}
?>