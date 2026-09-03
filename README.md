# School Management System

> **Intended repository name:** `school-management-system`

A PHP-based login and registration system for a school management platform.

Includes user authentication, admin dashboard, and account creation.

---

## Setup (XAMPP / WAMP)

1. **Import the database**
   - Open phpMyAdmin
   - Import `Midterm_codes/user_system.sql`
   - This creates the database `user_system`

2. **Place the files**
   - Copy the `Midterm_codes` folder (or the whole repo) into your web root

3. **Run**
   - Go to `http://localhost/Midterm_codes/` (or your folder path)

4. **Create an account**
   - Use the **Sign Up** button on the login page
   - To make an admin: after registering, update the user's `role` to `admin` in the database

---

## Database Config

File: `Midterm_codes/connection.php`

- Host: `localhost`
- User: `root`
- Password: *(empty)*
- Database: `user_system`

---

## Structure

```
semis_php/
└── Midterm_codes/
    ├── index.php              ← Login page
    ├── login.php
    ├── create_account.php
    ├── dashboard.php
    ├── adminDash.php
    ├── connection.php
    ├── sessionChecker.php
    └── user_system.sql
```

---

*Academic project — PHP / Web Systems.*
