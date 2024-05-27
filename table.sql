CREATE DATABASE to_do;

USE to_do;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT,
    date DATE,
    done BOOLEAN DEFAULT 0
);