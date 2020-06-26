<?php
    $p_name = $_POST['p_name'];
    $p_address = $_POST['p_address'];
    $p_no = $_POST['p_no'];
    $p_age = $_POST['p_age'];
    
    // Create connection
    $conn = mysqli_connect("localhost", "root","", "DataBase1");
    // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      // Create database
      $sql = "CREATE DATABASE DataBase1";
      if (mysqli_query($conn, $sql)) 
      {
        echo "Database created successfully";
      } else {
        echo "Error creating database: " . mysqli_error($conn);
      }
      // sql to create table
    $sql = "CREATE TABLE Patients (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
      echo "Table Patients created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
    $insert = "Inert into Patients (p_name,p_address,p_no,p_age)
    values ('$p_name', '$p_address', '$p_no', '$p_age')";
    
    if ($conn->query($insert)) 
      echo "New record created successfully";
     else 
      echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    

?>