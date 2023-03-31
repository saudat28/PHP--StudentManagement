<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../classes/selectstudents.class.php';
require_once '../classes/dbh.class.php';

$students = new SelectStudents ();
if ( $students->fetchdataactive()){
    
foreach ($students->fetchdataactive() as $Student) { 
?>
    <tr>
    <td><?php echo  $Student['student_id'];?></td>
    <td><?php echo  $Student['firstname'];?></td>
    <td><?php echo  $Student['lastname'];?></td>
    <td><?php echo  $Student['gender'];?></td>
    <td><?php echo  $Student['email'];?></td>
    <td><?php echo  $Student['mobile'];?></td>
    <td><?php echo  $Student['birthdate'];?></td>

    <td class="btnop"><a href="update.php?updateid=<?php echo  $Student['student_id'];?> "><i class="fa-solid fa-pen-to-square"></i></a> 
      <a  href= "../classes/deletestudent.class.php?deleteid=<?php echo  $Student['student_id'];?> "><i class="fa-solid fa-trash"></i></a>
      <a  href= "enroll.php?enrollid=<?php echo  $Student['student_id'];?> ">ENROLL</a>
    </tr>
  <?php
}
    }
   
?>
  