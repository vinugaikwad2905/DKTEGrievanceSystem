<?php
    include('../connection.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:http://localhost/Grievence-System/components/teacherloginmain.php');
    }
?>

<?php
    include('../connection.php');
?>

<?php
    $sql1 = "SELECT * FROM complaint WHERE catagory_complaint = 'ragging'";

    if ($result=mysqli_query($conn,$sql1))
        {
            $ragging=mysqli_num_rows($result);
            // echo $ragging;
        }
?>

<?php
    $sql2 = "SELECT * FROM complaint WHERE catagory_complaint = 'exam'";

    if ($result=mysqli_query($conn,$sql2))
        {
            $exam=mysqli_num_rows($result);
            // echo $exam;
        }
?>


<?php
    $sql3 = "SELECT * FROM complaint WHERE catagory_complaint = 'classroom'";

    if ($result=mysqli_query($conn,$sql3))
        {
            $classroom=mysqli_num_rows($result);
            // echo $classroom;
        }
?>


<?php
    $sql4 = "SELECT * FROM complaint WHERE catagory_complaint = 'canteen'";

    if ($result=mysqli_query($conn,$sql4))
        {
            $canteen=mysqli_num_rows($result);
            // echo $canteen;
        }
?>

<?php
    $sql5 = "SELECT * FROM complaint WHERE catagory_complaint = 'electricity'";

    if ($result=mysqli_query($conn,$sql5))
        {
            $electricity=mysqli_num_rows($result);
            // echo $electricity;
        }
?>

<?php
    $sql6 = "SELECT * FROM complaint WHERE catagory_complaint = 'lab'";

    if ($result=mysqli_query($conn,$sql6))
        {
            $lab=mysqli_num_rows($result);
            // echo $lab;
        }
?>


<?php
    $sql7 = "SELECT * FROM complaint WHERE catagory_complaint = 'parking'";

    if ($result=mysqli_query($conn,$sql7))
        {
            $parking=mysqli_num_rows($result);
            // echo $parking;
        }
?>


<?php
    $sql8 = "SELECT * FROM complaint WHERE catagory_complaint = 'teaching'";

    if ($result=mysqli_query($conn,$sql8))
        {
            $teaching=mysqli_num_rows($result);
            // echo $teaching;
        }
?>

<?php
    $sql9 = "SELECT * FROM complaint WHERE catagory_complaint = 'others'";

    if ($result=mysqli_query($conn,$sql9))
        {
            $others=mysqli_num_rows($result);
            // echo $others;
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

        <!-- Code -->

        <script type="text/javascript">  
  window.onload = function () {  
    var chart = new CanvasJS.Chart("chartContainer",  
    {    
      title: {  
        text: "Total number of complaints in each catagory"        
      },  
      data: [  
      {               
        type: "column",  
        dataPoints: [  
         
        { y: <?php echo $ragging; ?>, label: "ragging" },  
        { y: <?php echo $classroom; ?>, label: "classroom" },  
        { y: <?php echo $exam; ?>, label: "exam" },  
        { y: <?php echo $canteen; ?>, label: "canteen" },  
        { y: <?php echo $lab; ?>, label: "lab" },  
        { y: <?php echo $electricity; ?>, label: "electricity" },  
        { y: <?php echo $parking; ?>, label: "parking" },  
        { y: <?php echo $teaching; ?>, label: "teaching" },  
        { y: <?php echo $others; ?>, label: "others" }  
        ]  
      }  
      ]  
    });  
  
    chart.render();  
  }  
  </script>  
  <script type="text/javascript"   
src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        <!-- Code -->
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
                    <li class="nav-item"><a href="./teacherlogout.php" class = "nav-link me-lg-5 logout">Log Out</a></li>
                </ul>
            </div>
        </div>
       </div>