-- Create the database
CREATE DATABASE cloudixdb;
USE cloudixdb;

-- Create the users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Insert sample data
INSERT INTO users (name, email) VALUES
('Alice Smith', 'alice@cts.com'),
('Bob Johnson', 'bob@cts.com'),
('Charlie Brown', 'charlie@cts.com');