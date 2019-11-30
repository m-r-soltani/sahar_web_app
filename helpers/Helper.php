<?php
function getlasturl($url){
    $link = $url;
    $link_array = explode('/',$link);
    return $page = end($link_array);
}