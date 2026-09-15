<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
</head>
<body>

<h2>Student List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Course</th>
    <th>Semester</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td><?php echo $row['semester']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td>
        <a href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a>
        |
        <a href="delete_student.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php
}
?>

</table>

</body>
</html>s