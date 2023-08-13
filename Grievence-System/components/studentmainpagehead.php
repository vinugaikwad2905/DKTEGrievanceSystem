<?php
    include('../connection.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:http://localhost/Grievence-System/components/studloginmain.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous"
        />
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
        ></script>
        <script
        src="https://kit.fontawesome.com/0cb7e7055f.js"
        crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="../styles/style1.css">
    </head>
    <body>
       <div class="navbar navbar-expand-lg header">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="https://www.dkte.ac.in/">
                <img src = "https://www.dkte.ac.in/images/dkte-logo.png" alt = "Logo" class = "img-fluid">
            </a>
            <span class = "text-warning fs-6 text-md-start"><b>DKTE Society's <br>
            Textile and Engineering Institute, Ichalkaranji <br></b>
            Dist: Kolhapur (MAHARASHTRA) INDIA. <br>
            <span class = "text-light">
            An Autonomous Institute <br>
            Affiliated to Shivaji University, Kolhapur
            </span>
        </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="./studentlogout.php" class = "nav-link me-lg-5 logout">Log Out</a></li>
                </ul>
            </div>
        </div>
       </div>
