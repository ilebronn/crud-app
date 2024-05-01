<?php 
require_once 'config/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="JS, PHP, MySQL, Bootstrap & HTML">
    <meta name="author" content="Panginoon(LBRN)">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    <div class="text-center">
    <h1>CRUD App Using JS, PHP, MySQL, Bootstrap & HTML (Activity &  Assignment)</h1>
    </div>
        <div class="text-center mt-5">
        <a href="add.php" class="btn btn-success mb-3">Add New Record</a>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-dark table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Course</th>
                        <th>Date Added</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM student_tbl";

                        $result = mysqli_query($conn, $sql);
                        

                        if(mysqli_num_rows($result)>0){
                            while ($row = mysqli_fetch_assoc($result)){ ?>
                            <tr>
                                <td><?= $row['student_id']?></td>
                                <td><?= $row['first_name']?></td>
                                <td><?= $row['last_name']?></td>
                                <td><?= $row['course']?></td>
                                <td><?= date('F d, Y', strtotime($row['date_added']))?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $row['student_id']?>">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $row['student_id']?>">Delete</a>
                                </td>
                            </tr>
                        <?php }}else{ ?>
                        <tr>
                            <td class="text-center py-3" colspan="5">No Result Found</td>
                        </tr>
                        <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>