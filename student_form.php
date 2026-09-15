<?php
include("db.php");

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $query = "INSERT INTO students(name, course, semester, mobile, email)
              VALUES('$name','$course','$semester','$mobile','$email')";

    if(mysqli_query($conn, $query))
    {
        echo "Student Saved Successfully";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post" action="">
    Name:
    <input type="text" name="name"><br><br>

    Course:
    <input type="text" name="course"><br><br>

    Semester:
    <input type="text" name="semester"><br><br>

    Mobile:
    <input type="text" name="mobile"><br><br>

    Email:
    <input type="email" name="email"><br><br>

    <input type="submit" name="save" value="Save Student">
</form>
<a href="view_students.php">View Students</a>
</body>
</html>