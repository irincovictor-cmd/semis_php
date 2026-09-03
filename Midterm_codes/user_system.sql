-- School Management System Database
-- Import this into MySQL / MariaDB (phpMyAdmin or CLI)

CREATE DATABASE IF NOT EXISTS user_system;
USE user_system;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','user') NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Note: Accounts should be created via the Sign Up form
-- so passwords are properly hashed with password_hash().
-- Do not insert plain SHA2 passwords — login.php uses password_verify().
