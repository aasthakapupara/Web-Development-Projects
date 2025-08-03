<!-- update_employee.php -->
<?php
include 'db_config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id = $id";
$result = $conn->query($sql);
$employee = $result->fetch_assoc();
?>

<html>
<head>
    <title>Update Employee</title>
</head>
<body>
    <h1>Update Employee</h1>
    <form action="update_employee_action.php" method="POST">
        <input type="hidden" name="id" value="<?= $employee['id'] ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $employee['name'] ?>" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="<?= $employee['department'] ?>" required><br><br>

        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" value="<?= $employee['designation'] ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>

<?php $conn->close(); ?>


