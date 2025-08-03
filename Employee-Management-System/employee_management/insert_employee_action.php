<!-- insert_employee_action.php -->
<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];

    $sql = "INSERT INTO employees (name, department, designation) 
            VALUES ('$name', '$department', '$designation')";

    if ($conn->query($sql) === TRUE) {
        echo "New employee inserted successfully.";
        echo "<br><a href='insert_employee.php'>Go Back</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
