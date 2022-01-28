<?php

class ModelLogin{
    
    
    public static function verifLogin($conn){
        $stmt = $conn->prepare("SELECT user_email FROM admin WHERE user_email = :user_email AND user_pass = :user_pass");
        return $stmt;
    }

}

?>