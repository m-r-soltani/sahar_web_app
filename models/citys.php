<?php
function SEND_CITY($shahr,$ostan_id){
    $db = Db::getInstance();
    $res=$db->query("INSERT INTO bnm_shahr (name,ostan_id) VALUES ('$shahr','$ostan_id')");
    return $res;
}
?>