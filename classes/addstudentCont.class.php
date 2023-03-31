<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

     require_once 'addstudents.class.php';

     class AddstudentCont extends AddStudents{
        private $firstname;
        private $lastname;
        private $gender;
        private $email;
        private $mobile;
        private $birthdate;

        public function __construct($firstname,$lastname,$gender,$email,$mobile,$birthdate){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->gender = $gender;
            $this->email = $email;
            $this->mobile = $mobile;
            $this->birthdate = $birthdate;
        }
        
        public function signStudents(){
          
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
     

        $this->setStudent($this->firstname,$this->lastname,$this->gender,$this->email,$this->mobile,$this->birthdate);
            
        }
        

        private function emptyInput() {
            $result;
            if(empty($this->firstname) || empty($this->lastname) || empty($this->email) ||empty($this->mobile) || empty($this->gender)){
                    $result = false;
            }
            else {
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
    }
?>