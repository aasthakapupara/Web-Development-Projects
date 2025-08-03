<!-- view_employees.php -->
<?php
include 'db_config.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

echo "<h1>View Employees</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Actions</th>
        </tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["department"]. "</td>
                <td>" . $row["designation"]. "</td>
                <td>
                    <a href='update_employee.php?id=" . $row["id"] . "'>Update</a> |
                    <a href='delete_employee.php?id=" . $row["id"] . "'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
