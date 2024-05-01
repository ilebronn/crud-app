<?php
// Include the database connection file
require_once 'config/config.php';
// Check if the form has been submitted
if (isset($_POST['submit'])) {
        // Get the form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
// SQL query to insert data into the `student_tbl` table
    $sql = "INSERT INTO student_tbl (first_name, last_name, course) VALUES ('$fname', '$lname', '$course')";  
// Check if the query was successful
    if (mysqli_query($conn, $sql)){
        echo "
            <script>
                alert('New Student added successfully!');
            </script>
        ";
// If not successful, display an error message
    } else { 
        echo "
            <script>
                alert('Error adding new student!');
            </script>
        ";
    }
    // Close the database connection
    mysqli_close($conn);
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
    <title>Add New Students</title>

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
        <h3 class="text-center my-5">CRUD App Using JS, PHP, MySQL, Bootstrap & HTML (Activity &  Assignment)</h3>
        <h1 class="text-center">Add a new Student</h1>
        <div class="container w-50 m-auto">
    <form action="add.php" method="post">
        <h3>Name</h3>
        <input class="form-control mb-3" type="text" name="fname" placeholder="Enter First Name" required>
        <input class="form-control mb-3" type="text" name="lname" placeholder="Enter Last Name" required>
        <h3>Course</h3>
        <select class="form-select mb-3" name="course" required>
            <option value="BSIT">BSIT</option>
            <option value="BSBA">BSBA</option>
            <option value="BSCRIM">BSCRIM</option>
            <option value="BSTM">BSTM</option>
            <option value="BSAIS">BSAIS</option>
        </select>
        <div class="text-center">
    <input class="btn btn-success mb-3" type="submit" name="submit" value="Add Student">
    <a href="index.php" class="btn btn-warning mb-3">Back to Home</a>
    </div>
    </form>
</div>
    </div>
</body>
</html>