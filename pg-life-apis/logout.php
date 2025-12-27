<?php
    session_start();
    session_destroy();
    header("PGLife/pg-life-home.php");
?>