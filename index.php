<?php session_start();
date_default_timezone_set('Asia/Tehran');
ini_set("file_uploads",1);
$root = (isset($_SERVER['HTTPS']) ? "http://" : "http://").$_SERVER['HTTP_HOST'];
$script_name = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

define ('__ROOT__', $root.$script_name);
define ('__SALT__', 'Fho8G**g&0ds43syK0PKPph&^D64fi7g1k-90`j*G&7IVGD');
define ('__SITE_NAME__', 'CRM صباح');
define ('__ROOT_PATH__', realpath($_SERVER['DOCUMENT_ROOT'].'/'.$script_name));
define ('__HOSTNAME__', 'localhost');
define ('__USERNAME__', 'root');
define ('__PASSWORD__', '');
define ('__DATABASE__', 'saharertebat');
spl_autoload_register(function ($className) {
    if (file_exists('System/' . $className . '.php')) {
        require_once 'System/' . $className . '.php';
    }
    else if (file_exists('Controllers/' . $className . '.php')) {
        require_once 'Controllers/' . $className . '.php';
    }
    else if (file_exists('Models/' . $className . '.php')) {
        require_once 'Models/' . $className . '.php';
    }
    else if (file_exists('Libraries/' . $className . '.php')) {
        require_once 'Libraries/' . $className . '.php';
    }
    else if (file_exists($className . '.php')) {
        require_once $className . '.php';
    }
});
new Bootstrap();
//new Authentication();
/////////////////////php functions///////////////////////
//insert_Generator(data_array($_POSTED array),'table_name')
function Insert_Generator($data,$table){
    if (key_exists('id',$data)){
        unset($data['id']);
    }
    array_pop($data);
    end($data);
    $lastkey = key($data);
    $sql="INSERT INTO $table (";
    foreach ($data as $key => $value) {
        if($key!=$lastkey) {
            $sql .= $key . ',';
        }else{
            $sql .= $key . ') VALUES(';
            foreach ($data as $k => $val) {
                if($k!=$lastkey) {
                    $sql .= '\'' . $val . '\',';
                }else{
                    $sql .= '\'' . $val . '\')';
                }
            }
        }
    }
    return $sql;
}
//Update_Generator(data_array($_POSTED array),'table_name','where id = $id')
function Update_Generator($data,$table,$condition,$exceptions=false){
    if ($exceptions){
        foreach ($exceptions as $key => $val){
            if (key_exists($val,$data) && $data[$val]=='' || $data[$val]==' '|| $data[$val]==null){
                unset($data[$val]);
            }
        }
    }
    if (key_exists('id',$data)){
        unset($data['id']);
    }
    array_pop($data);
    end($data);
    $lastkey = key($data);
    $sql="UPDATE $table SET ";
    foreach ($data as $key => $value) {
        if($key!=$lastkey){
            $sql .= $key . '=' . '\'' . $value . '\',';
        }else{
            $sql .= $key . '=' . '\'' . $value . '\'';
            $sql .=' ' .$condition;
        }
    }
    return $sql;
}

////////getor($variable,replace element example:'abc')
function getor($data,$param=""){
    if($data!="" || $data!= " "){
        return $data;
    }else{
        return $param;
    }
}
