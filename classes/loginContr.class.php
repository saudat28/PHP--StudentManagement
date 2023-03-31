<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

     require_once 'login.class.php';

     class LoginContr extends Login{
        
        private $username;
        private $password;

        public function __construct($username,$password,){
            $this->username = $username;
            $this->password = $password;
        }
        
        public function loginUser(){

            if($this->emptyInput() == false){
                    //echo empty input
                    header ("location: ..index.php?error=emptyinput");
                    exit();
            }
          
        $this->getUser($this->username,$this->password);
            
        }

        private function emptyInput() {
            $result;
            if(empty($this->username) ||  empty($this->password) ){
                    $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }

     }

?>