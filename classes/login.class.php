<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'dbh.class.php';


class Login extends Dbh{

    protected function getUser($username,$password){
        $sql =  "SELECT password FROM teachers WHERE username= ? OR password = ?";
        $stmt = $this->connect()->prepare($sql); 
        if(!$stmt->execute(array($username,$password))){
            $stmt = null;
            header("location: ..index.php?error=stmtfailed1");
            exit();
        }
        if ($stmt->rowCount() == 0){
           $stmt = null;
            header ('location:../loginfo.php');
           exit();
        }

        $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpassword = password_verify($password, $passwordHashed[0]["password"]);

        if ($checkpassword ==false){
            $stmt = null;
            header("location: ../loginfo.php");
            exit();
         }
         elseif ($checkpassword ==true) {
            $sql =  "SELECT * FROM teachers WHERE username= ? OR email=? AND password =?";
            $stmt = $this->connect()->prepare($sql); 

            if(!$stmt->execute(array($username,$username,$password))){
                $stmt = null;
                header("location: ..index.php?error=stmtfailed2");
                exit();
            }
            if ($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../loginfo.php");
                exit();
             }

           
             $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
             session_start();
             $_SESSION["teacher_id"] = $user[0]["teacher_id"];
             $_SESSION["username"] = $user[0]["username"];

             
         }
         $stmt = null;
    }

}
?>