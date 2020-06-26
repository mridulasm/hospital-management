<?php
    $p_name = $_POST['p_name'];
    $p_address = $_POST['p_address'];
    $p_no = $_POST['p_no'];
    $p_age = $_POST['p_age'];
    
    // Create connection
    $conn = mysqli_connect("localhost", "root","", "myDataBase3");
    // Check connection
    if (!$conn) 
      die("Connection failed: " . mysqli_connect_error());
    else
        echo "<br>Connection successful";
    
    $insert = "Inert into patients_details (p_name,p_address,p_no,p_age)
    values ('$p_name', '$p_address', '$p_no', '$p_age')";
    
    if ($conn->query($insert)) 
      echo "New record created successfully";
     else 
      echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    

?>