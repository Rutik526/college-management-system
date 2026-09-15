<?php
include("db.php");

if(isset($_POST['save']))
{
    $student_name = $_POST['student_name'];
    $attendance_date = $_POST['attendance_date'];
    $status = $_POST['status'];

    $query = "INSERT INTO attendance(student_name, attendance_date, status)
              VALUES('$student_name','$attendance_date','$status')";

    if(mysqli_query($conn, $query))
    {
        echo "Attendance Saved Successfully";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance Form</title>
</head>
<body>

<h2>Attendance Form</h2>

<form method="post">

Student Name:
<input type="text" name="student_name">
<br><br>

Date:
<input type="date" name="attendance_date">
<br><br>

Status:
<select name="status">
    <option>Present</option>
    <option>Absent</option>
</select>

<br><br>

<input type="submit" name="save" value="Save Attendance">

</form>

</body>
</html>