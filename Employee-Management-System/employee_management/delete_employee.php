<!-- delete_employee.php -->
<?php
include 'db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM employees WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted successfully.";
        echo "<br><a href='view_employees.php'>Go Back</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
