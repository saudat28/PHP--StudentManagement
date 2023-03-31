<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../classes/selectcourses.class.php';
require_once '../classes/dbh.class.php';

    $courses = new SelectCourses();
    if ( $courses->fetchcoursedata()){
        
    foreach ($courses->fetchcoursedata() as $Courses ){ 
    ?>
    

    <tr>
    <td><?php echo  $Courses ['course_id'];?></td>
    <td><?php echo  $Courses ['course_name'];?></td>
    <td><?php echo  $Courses ['course_fee'];?></td>

    <td class="btnop"><a href="updatecourse.php?updateid=<?php echo  $Courses['course_id'];?> "><i class="fa-solid fa-pen-to-square"></i></a> 
      <a  href= "../classes/deletecourse.class.php?deleteid=<?php echo  $Courses['course_id'];?> "><i class="fa-solid fa-trash"></i></a>
    </tr>
  <?php
}
    }
   
?>
