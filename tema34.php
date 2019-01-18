
<?php
include 'header.php';
if (isset($_POST['create_student'])) {
    $student_obj->create_student_info($_POST);
}
?>

        <?php
            $student_list = $student_obj->student_list();
        ?>

        <div class="container student_list" > 
            <div class="row content">
                <div class="col-lg-10 col-md-10">
                    <h3>Student List</h3>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a  href="create-student-info.php"  class="button button-purple">Create Student</a> 
                </div>
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
                    unset($_SESSION['message']);
                }
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Gender</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                    if ($student_list->num_rows > 0) {
                    while ($row = $student_list->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td><?php echo $row["student_name"] ?></td>
                                    <td><?php echo $row["email_address"] ?></td>
                                    <td><?php echo $row["contact"] ?></td>
                                    <td><?php echo $row["gender"] ?></td>
                                    <td class="text-right">
                                        <a  href="<?php echo 'delete-student-info.php?id=' . $row["student_id"] ?>" class="button button-red">Delete</a>  
                                        <a  href="<?php echo 'update-student-info.php?id=' . $row["student_id"] ?>" class="button button-blue">Edit</a>  
                                        <a href="<?php echo 'read-student-info.php?id=' . $row["student_id"] ?>" class="button button-green">View</a>
                                    </td>
                                </tr>
                        <?php
                        }
                    }
                    ?>
                </tbody>
                </table>

            </div>
        </div>

<?php include 'footer.php' ?>