<?php
include("db.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    mysqli_query($conn,
    "UPDATE students SET
    name='$name',
    course='$course',
    semester='$semester',
    mobile='$mobile',
    email='$email'
    WHERE id=$id");

    header("Location:view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<form method="post">

Name:
<input type="text" name="name"
value="<?php echo $row['name']; ?>">
<br><br>

Course:
<input type="text" name="course"
value="<?php echo $row['course']; ?>">
<br><br>

Semester:
<input type="text" name="semester"
value="<?php echo $row['semester']; ?>">
<br><br>

Mobile:
<input type="text" name="mobile"
value="<?php echo $row['mobile']; ?>">
<br><br>

Email:
<input type="email" name="email"
value="<?php echo $row['email']; ?>">
<br><br>

<input type="submit" name="update" value="Update Student">

</form>

</body>
</html>