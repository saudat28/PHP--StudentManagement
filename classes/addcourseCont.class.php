<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

     require_once 'addcourse.class.php';

     class AddcourseCont extends AddCourses{
        private $course_name;
        private $course_fee;
    
        public function __construct($course_name,$course_fee){
            $this->course_name= $course_name;
            $this->course_fee = $course_fee;
            
        }
        
        public function signCourse(){
          
            if($this->emptyInput() == false){
                    //echo empty input
                    header ("location:course.php?error=emptyinput");
                    exit();
            }
     

        $this->setCourse($this->course_name,$this->course_fee);
            
        }
        

        private function emptyInput() {
            $result;
            if(empty($this->course_name) || empty($this->course_fee)){
                    $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }

    }
?>