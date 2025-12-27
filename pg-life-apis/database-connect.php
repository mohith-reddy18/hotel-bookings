<?php
  $conn = mysqli_connect("127.0.0.1","root","","");

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MYSQL ! please contact the admin.";
    return;
  }
?>  