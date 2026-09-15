<?php
include("db.php");

if(isset($_POST['save']))
{
    $student_name = $_POST['student_name'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

    $query = "INSERT INTO results(student_name, subject, marks)
              VALUES('$student_name','$subject','$marks')";

    if(mysqli_query($conn, $query))
    {
        echo "Result Saved Successfully";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Management</title>
</head>
<body>

<h2>Result Form</h2>

<form method="post">

Student Name:
<input type="text" name="student_name">
<br><br>

Subject:
<input type="text" name="subject">
<br><br>

Marks:
<input type="number" name="marks">
<br><br>

<input type="submit" name="save" value="Save Result">

</form>

</body>
</html>