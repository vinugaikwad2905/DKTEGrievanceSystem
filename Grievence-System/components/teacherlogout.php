<?php
    include('../connection.php');
    session_start();
    session_unset();
    session_destroy();
    header('location:http://localhost/Grievence-System/components/teacherloginmain.php');
?>