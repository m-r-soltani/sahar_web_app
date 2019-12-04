<?php

function Insert_city($shahr,$ostan_id){
    $res=Db::justexecute("INSERT INTO bnm_shahr (name,ostan_id) VALUES ('$shahr','$ostan_id')");
    return $res;
}
function Update_city($id,$shahr,$ostan_id){
    $res=Db::justexecute("UPDATE bnm_shahr SET name='$shahr',ostan_id='$ostan_id' WHERE id = $id");
    return $res;
}
?>