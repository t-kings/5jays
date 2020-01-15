<?php
$servername = "localhost";
$username = "root";

// Create connection
$conn = new mysqli($servername, $username);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to server successfully";

// Create database
$sql = "CREATE DATABASE 5jays";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// connect to the database
$db = mysqli_connect('localhost', 'root', '', '5jays');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to database successfully";

// sql to create table
$sql1 = "CREATE TABLE  admin(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(10) NOT NULL,
password VARCHAR(3000) NOT NULL
)";

if ($db->query($sql1) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


// sql to create table
$sql2 = "CREATE TABLE  Items(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ItemName VARCHAR(30) NOT NULL,
ItemDescription VARCHAR(30) NOT NULL,
ItemNumber VARCHAR(30) NOT NULL,
NumberSold INT(30) NOT NULL,
ItemDate VARCHAR(30) NOT NULL,
Categories VARCHAR(30) NOT NULL,
Ratings INT(30) NOT NULL,
Pic VARCHAR(30) NOT NULL,
Amount INT(10) NOT NULL,
ItemQty INT(2) NOT NULL
)";


if ($db->query($sql2) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


// sql to create table
$sql4 = "CREATE TABLE  Deals(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ItemName VARCHAR(30) NOT NULL,
    ItemT VARCHAR(30) NOT NULL,
    ItemDescription VARCHAR(300) NOT NULL,
    ItemNumber VARCHAR(30) NOT NULL,
    NumberSold INT(30) NOT NULL,
    ItemDate VARCHAR(30) NOT NULL,
    Categories VARCHAR(30) NOT NULL,
    Ratings INT(30) NOT NULL,
    Pic VARCHAR(30) NOT NULL,
    Amount INT(10) NOT NULL,
    ItemQty INT(2) NOT NULL
    )";
    
    
    if ($db->query($sql4) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }


// sql to create table
$sql3 = "CREATE TABLE  Orders(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    CustormerName VARCHAR(30) NOT NULL,
    CustomerPhoneNumber VARCHAR(30) NOT NULL,
    CustomerEmail VARCHAR(30) NOT NULL,
    OrderDate VARCHAR(30) NOT NULL,
    ItemNumber VARCHAR(30) NOT NULL,
    ItemStatus VARCHAR(30) NOT NULL
    )";
    
    
    if ($db->query($sql3) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    

?> 