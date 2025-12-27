<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pglife"; // exactly as in phpMyAdmin

    // Always include database in mysqli_connect()
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    global $conn;
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $college_name=$_POST["college"];
    $gender=$_POST["gender"];
    $password=sha1(($password)); //hashing i.e. more secure to store than direct password

    $sql = "select *from users where email='$email'";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "something went wrong!";
        exit;
    }

    $rows = mysqli_num_rows($result);
    if($rows !=0){
        echo "email already exisits with us!";
        exit;
    }

    $sql = "insert into users (email,password,full_name,phone,gender,college_name) values ('$email','$password','$name','$phone','$gender','$college_name')";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Something went wrong!";
        exit;
    }
    echo  "your acc has been created successfully!";
    header("Location: ../pg-life-home.php");

    mysqli_close($conn);
?>