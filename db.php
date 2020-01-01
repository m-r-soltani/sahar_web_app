<?php defined('__ROOT__') OR exit('No direct script access allowed');
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance($localhost = NULL, $dbname = NULL, $username = NULL, $password = NULL) {
      if (!isset(self::$instance)) {
      	$localhost = $localhost? $localhost:__HOSTNAME__;
		$dbname = $dbname? $dbname:__DATABASE__;
		$username = $username? $username:__USERNAME__;
		$password = $password? $password:__PASSWORD__;
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		try{
			self::$instance = new pdo( 'mysql:host='.$localhost.';dbname='.$dbname.';charset=utf8',
							$username,
							$password,
//                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
							$pdo_options);
		} catch(PDOException $ex){
			die(json_encode(array($ex, 'message' => 'Database connection problem!')));
		}
      }
      return self::$instance;
    }
    public static function fetchall_Query($sql){
        $connect = Db::getInstance();
        $result=$connect->prepare($sql);
        $result->execute();
        $rows=$result->fetchAll();
        return $rows;
    }
    public static function fetch_assoc($sql){
        $connect = Db::getInstance();
        $result=$connect->prepare($sql);
        $result->execute();
        $rows=$result->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
      public static function justexecute($sql){
          $connect = Db::getInstance();
          $result=$connect->prepare($sql);
          $result->execute();
          //$rows=$result->fetchAll();
          return $result;
      }
  }
