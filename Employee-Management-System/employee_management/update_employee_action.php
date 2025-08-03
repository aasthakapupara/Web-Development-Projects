<!-- update_employee_action.php -->
<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];

    $sql = "UPDATE employees SET name='$name', department='$department', designation='$designation' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Employee updated successfully.";
        echo "<br><a href='view_employees.php'>Go Back</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

