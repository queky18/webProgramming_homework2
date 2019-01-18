<?php
include 'header.php';
if (isset($_POST['create_student'])) {
    $student_obj->create_student_info($_POST);
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="container" style="margin-top:25px;"> 
                <div class="row content">
                    <div class="col-lg-8 col-md-8">
                        <h3>Create Student Info</h3> 
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a  href="tema34.php"  class="button button-purple" style="float:right;">View Student List</a> 
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="student_name">Name:</label>
                                <input type="text" name="student_name" id="student_name" class="form-control" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="email_address">Email address:</label>
                                <input type="email" class="form-control" name="email_address" id="email_address" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact:</label>
                                <input type="text" class="form-control" name="contact" id="contact"  maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="" selected>Select</option>
                                    <option value="Male" >Male</option>
                                    <option value="Female" >Female</option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="country">Country:</label>
                                <input type="text" name="country" id="country" class="form-control"  maxlength="50">
                            </div>
                            <input type="submit" class="button button-green" style="float:right" name="create_student" value="Submit"/>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr/>
<?php
include 'footer.php';
?>

