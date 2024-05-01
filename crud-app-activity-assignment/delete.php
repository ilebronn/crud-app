<?php
    require_once 'config/config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM `student_tbl` WHERE `student_id`='$id'";

    if(mysqli_query($conn, $sql)){
        echo  '<script>
            alert("Successfully Deleted!");
            location.href = "edit.php?id=' . $id . '";
        </script>';
    } else {
        echo '<script>
            alert("Deleting Error!");
            location.href = "edit.php?id=' . $id . '";
        </script>';
    }
    mysqli_close($conn);
?>
