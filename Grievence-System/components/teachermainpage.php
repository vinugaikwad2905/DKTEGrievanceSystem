<?php
    include('./teacherheadmain.php');
?>

<div class = "mt-5 container-fluid fs-3">
    Status
</div>

<div class="container-fluid d-sm-flex justify-content-sm-center d-flex justify-content-center mt-2 mb-5">
    <div class = "border w-50 p-3 text-center"><a href="http://localhost/Grievence-System/components/notyetprocess.php" class = "btn btn-success">Not Yet Process</a></div>
    <div class = "border w-50 p-3 text-center"><a href="http://localhost/Grievence-System/components/inprocess.php"  class = "btn btn-success">In Process</a></div>
    <div class = "border w-50 p-3 text-center"><a href="http://localhost/Grievence-System/components/completed.php"  class = "btn btn-success">Completed</a></div>
</div>

<div class = "mt-5 d-flex justify-content-center fs-3 mt-5 mb-5">
    <div id="chartContainer" style="height: 300px; width: 50%;">  
  </div>  
</div>

<?php
    include('./footer.php');
?>