<?php
class Conf {

    
    static private $database = array(
    'hostname' => "localhost",
    'database' => "infoshop",
    'login' => "root",
    'password' => ""
    );
   
    static public function getLogin() 
    {   
        return conf::$database['login'];
    }
    static public function getPass() {
        return conf::$database['password'];}
    static public function getHost() {
        return conf::$database['hostname'];}
    static public function getBase() {
        return conf::$database['database'];
    }
   
   }


?>