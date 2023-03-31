<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

     require_once 'signup.class.php';

     class signupContrl extends Signup{
        private $firstname;
        private $lastname;
        private $email;
        private $mobile;
        private $username;
        private $password;
        private $passwordrepe;

        public function __construct($firstname,$lastname,$email,$mobile,$username,$password,$passwordrepe){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->mobile = $mobile;
            $this->username = $username;
            $this->password = $password;
            $this->passwordrepe= $passwordrepe;
        }
        
        public function signupUser(){
            if ($this->invalidName()== false){
                //echo invalid name
                header ("location: ..index.php?error=invalid name");
                exit();
            }
            if($this->emptyInput() == false){
                    //echo empty input
                    header ("location:index.php?error=emptyinput");
                    exit();
            }
           
            if ($this->invalidEmail()== false){
                 //echo invalid email
                 header ("location: ..index.php?error=invalid email");
                 exit();
            }
            if ($this->passwordMatch() == false){
                //echo invalid email
                $alert = "PASSWORD MISMATCH";
               echo "<script type='text/javascript'>alert('$alert');</script>";

                exit();
           }
          if (!$this->nameTaken() == false){
            //echo invalid email
            header ("location:index.php?error=nametaken");
            exit();
       }

        $this->setUser($this->firstname,$this->lastname,$this->email,$this->mobile,$this->username,$this->password);
            
        }
        

        private function emptyInput() {
            $result;
            if(empty($this->firstname) || empty($this->lastname) || empty($this->email) ||empty($this->mobile) || empty($this->username) || empty($this->password) || empty($this->passwordrepe)){
                    $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }

        private function invalidName(){
            $result;
            if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
                $result = false;
            }
            else{
                $result = true;
            }
             return $result;
        }

        private function invalidEmail(){
            $result;
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }

        private function passwordMatch(){
            $result;
            if($this->password !== $this->passwordrepe){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }


        private function nameTaken(){
            $result;
            if($this->checkUser($this->username, $this->email)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

     }

?>