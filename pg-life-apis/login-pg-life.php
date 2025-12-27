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

    $email=$_POST["email"];
    $password=$_POST["password"];
    $password=sha1(($password));

    $sql= "select *from users where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "something went wrong!";
        exit;
    }

    $rows = mysqli_num_rows($result);
    if($rows ==0){
        echo "Login failed! Invalid password or email.";
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id']= $row['id'];
    $_SESSION['full_name']= $row['full_name'];
    $_SESSION['email']= $row['email'];
    echo "User ID: " . $_SESSION['user_id'] . "<br>";
    header("location:/index.php");
    mysqli_close($conn);


?>
