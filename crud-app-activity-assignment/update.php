<?php 
    require_once 'config/config.php';

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $course = $_POST['course'];

        $sql = "UPDATE `student_tbl` SET `first_name` = '$fname', `last_name` = '$lname', 
        `course` = '$course' WHERE `student_id` = '$id' ";

        if(mysqli_query($conn, $sql)){
            echo  '<script>
                alert("Successfully Updated!");
                location.href = "edit.php?id=' . $id . '";
            </script>';
        } else {
            echo '<script>
                alert("Error Updating!");
                location.href = "edit.php?id=' . $id . '";
            </script>';
        }
        mysqli_close($conn);
    }
?>
