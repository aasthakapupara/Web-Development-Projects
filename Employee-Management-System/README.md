# Employee Management System (PHP + MySQL)

A basic CRUD-based web application to manage employee records using PHP and MySQL.

## 🚀 Features

- Add new employees
- View all employee records
- Update employee details
- Delete employees from the system

## 🗂️ File Structure

```text
employee_management/
├── db_config.php              # Database connection
├── insert_employee.php        # Form to add new employee
├── insert_employee_action.php # Logic to insert data
├── update_employee.php        # Form to edit existing employee
├── update_employee_action.php # Logic to update data
├── delete_employee.php        # Logic to delete employee
├── view_employees.php         # View employee records
```
## ⚙️ Setup Instructions

1. Clone or download this repository.
2. Place the folder in your XAMPP/WAMP `htdocs` directory.
3. Create a MySQL database and update your DB credentials in `db_config.php`.
4. Access the system via `http://localhost/employee_management/`.

## 🛠️ Technologies Used

- PHP
- MySQL
- HTML/CSS (basic)

## 📌 Note

This is a simple academic project meant for learning purposes. You may add validations, styling, and security features (like input sanitization) before using it in production.
