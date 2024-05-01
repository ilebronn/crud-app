<?php
// Include the database connection file
require_once 'config/config.php';

$id = $_GET['id']; // Get the ID from URL parameter

// Change single quotes to backticks in the SQL query
$sql = "SELECT * FROM `student_tbl` WHERE `student_id` =  '$id'";

$result  = mysqli_query($conn, $sql);

if  (mysqli_num_rows($result) >  0) {
    $row = mysqli_fetch_assoc ($result);

    $id =  $row['student_id'];
    $fname =  $row['first_name'];
    $lname =  $row['last_name'];
    $course  =  $row['course'];
}else{
    header ("Location: index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="JS, PHP, MySQL, Bootstrap & HTML">
    <meta name="author" content="Panginoon(LBRN)">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Students</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container">
            <a class="navbar-brand text-warning" href="index.php">Crud App</a>
        </div>
    </nav>
    <div class="container ">
        <h3 class="text-center my-5">CRUD App Using JS, PHP, MySQL, Bootstrap & HTML (Activity & Assignment)</h3>
        <h1 class="text-center">Edit Student</h1>
        <div class="container w-50 m-auto">
    <form action="update.php" method="post">
        <h3>Name</h3>
        <input class="form-control mb-3" type="text" name="fname" value="<?= $fname?>" placeholder="Enter First Name" required>
        <input class="form-control mb-3" type="hidden" name="id" value="<?= $id?>" />
        <input class="form-control mb-3" type="text" name="lname" value="<?= $lname?>" placeholder="Enter Last Name" required>
        <h3>Course</h3>
        <select class="form-select mb-3" name="course" required>
            <option value="BSIT" <?= ($course == 'BSIT') ? 'selected' : '' ?>>BSIT</option>
            <option value="BSBA" <?= ($course == 'BSBA') ? 'selected' : '' ?>>BSBA</option>
            <option value="BSCRIM" <?= ($course == 'BSCRIM') ? 'selected' : '' ?>>BSCRIM</option>
            <option value="BSTM" <?= ($course == 'BSTM') ? 'selected' : '' ?>>BSTM</option>
            <option value="BSAIS" <?= ($course == 'BSAIS') ? 'selected' : '' ?>>BSAIS</option>
        </select>
        <div class="text-center">
    <input class="btn btn-success mb-3" type="submit" name="update" value="Update">
    <a href="index.php" class="btn btn-warning mb-3">Back to Home</a>
    </div>
    </form>
</div>
    </div>
</body>
</html>