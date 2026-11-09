
# Applicant Details Management System

## Aim
To create a webpage using PHP and MySQL to retrieve and display applicant details from a database.

## Technologies Used
- HTML
- CSS
- PHP
- MySQL / MariaDB
- XAMPP

## Database Details
Database Name: applicant_db

Table Name: applicants

## Table Structure

| Field | Data Type |
|---|---|
| id | INT (Primary Key, Auto Increment) |
| name | VARCHAR(100) |
| email | VARCHAR(100) |
| mobile | VARCHAR(15) |
| username | VARCHAR(50) |

## Features
- Connects PHP with MySQL.
- Retrieves applicant records dynamically.
- Displays records in an HTML table.
- Uses mysqli functions.
- Uses htmlspecialchars() for safe output.

## How to Run

1. Install XAMPP.
2. Start Apache and MySQL.
3. Copy the project folder into htdocs.
4. Create the database by importing applicant_db.sql using phpMyAdmin.
5. Update db.php if your database credentials differ.
6. Open the browser and visit:

http://localhost/ApplicantDetails/index.php

## Result
Successfully created a PHP webpage that retrieves applicant details from MySQL and displays them in tabular format.
