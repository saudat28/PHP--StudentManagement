<?php
    class Dbh{
        protected function connect(){
            try {
                //code...
                $host= "localhost";
                $password = "";
                $username = "root";
                $dbname = "StudentSystem";
                $dbh = new PDO ('mysql:host=localhost;dbname=StudentSystem',$username, $password);
                return $dbh;
            } catch (PDOException $ex) {
               print "ERROR: " .$ex->getMessage() ."<br>";
               die();
            }
            
        }
    }
?>