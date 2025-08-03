<!-- insert_employee.php -->
<html>
<head>
    <title>Insert Employee</title>
</head>
<body>
    <h1>Insert Employee</h1>
    <form action="insert_employee_action.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br><br>

        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" required><br><br>

        <button type="submit">Insert</button>
    </form>
</body>
</html>


