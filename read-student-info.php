<?php
  include 'header.php';
 
  if(isset($_GET['id'])){
    $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  }else{
    header('Location: index.php');
  }
 ?>


<div class="container" > 
    
  <div class="row content">

  <div class="col-lg-6">

      <div class="container" > 
        
        <div class="row content" style="padding-top:50px; padding-bottom:50px;">

          <div class="col-lg-8 col-md-8">
            <h3>View Student Info</h3>
          </div>
          <div class="col-lg-4 col-md-4">
            <a  href="tema34.php"  class="button button-purple" style="float:right;">View Student List</a>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:50px;">
            <label >Name:</label>
            <?php  if(isset($student_info['student_name'])){echo $student_info['student_name']; }?>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <label>Email address:</label>
            <?php  if(isset($student_info['email_address'])){echo $student_info['email_address'];} ?>
          </div>
          
          <div class="col-lg-12 col-md-12 col-sm-12">
            <label >Contact:</label>
            <?php  if(isset($student_info['contact'])){echo $student_info['contact'];} ?>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <label >Gender:</label>
            <?php  if(isset($student_info['gender'])){echo $student_info['gender'];} ?>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <label >Country:</label>
            <?php  if(isset($student_info['country'])){echo $student_info['country'];} ?>
          </div>
          
          <div class="col-lg-12 centered" style="margin-bottom: 50px; margin-top:25px;">
            <a href="<?php echo 'update-student-info.php?id='.$student_info["student_id"] ?>" class="button button-blue">Edit</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



 <?php
 include 'footer.php';
 ?>

