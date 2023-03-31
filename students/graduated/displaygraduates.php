<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../classes/selectstudents.class.php';
require_once '../classes/dbh.class.php';

$students = new SelectStudents ();
if ( $students->fetchgraduated()){
    
foreach ($students->fetchgraduated() as $Student) { 
?>
    <tr>
    <td><?php echo  $Student['student_id'];?></td>
    <td><?php echo  $Student['firstname'];?></td>
    <td><?php echo  $Student['lastname'];?></td>
    <td><?php echo  $Student['gender'];?></td>
    <td><?php echo  $Student['email'];?></td>
    <td><?php echo  $Student['mobile'];?></td>
    <td><?php echo  $Student['birthdate'];?></td>
  <?php
}
    }
   
?>
  