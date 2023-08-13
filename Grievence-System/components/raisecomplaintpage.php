<?php
    include('./studinnerpagehead.php');
    $prn = $_GET['prn'];
?>

<ul class="nav nav-pills mb-5 bg-light">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="http://localhost/Grievence-System/components/studentmainpage.php?prn=<?php echo $prn ?>">Under Scrutiny</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="http://localhost/Grievence-System/components/raisecomplaintpage.php?prn=<?php echo $prn ?>">Raise Complaints</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/Grievence-System/components/rejectedpage.php?prn=<?php echo $prn ?>">Rejected</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href = "http://localhost/Grievence-System/components/historypage.php?prn=<?php echo $prn ?>">Completed</a>
  </li>
</ul>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method = "post" class = "mb-5">
<?php 
    include('../connection.php');

    $sql = "SELECT * FROM student WHERE prn_no = '{$prn}'";

    $result = mysqli_query($conn,$sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $prn_no = $row['prn_no'];
            $fist_name = $row['fist_name'];
            $l_name = $row['l_name'];
            $branch = $row['branch'];
            $degree = $row['degree'];
            $m_name = $row['m_name'];
        }
    }

    if(isset($_POST['insert'])){
        if(!empty($_POST['tc'])){
            $selected = $_POST['tc'];
            $complaint = $_POST['complaint'];
            $sql = "INSERT INTO complaint(prn_number,fname,mname,lname,branch,degree,catagory_complaint,complaints,status) VALUES('{$prn_no}','{$fist_name}','{$m_name}','{$l_name}','{$branch}','{$degree}','{$selected}','{$complaint}','Not Yet Process')";
            if(mysqli_query($conn,$sql)){
                echo "<div class = 'bg-success text-light text-center'>Data Successfully inserted</div>";
            }else{
                echo "<div class = 'bg-danger text-light text-center'>Data not inserted</div>";
            }
        }
    }
?>
<div class="container w-50 border rounded-3 mt-5 mb-5 p-3">
    <div class = "fs-3  text-center mb-2">Student Information</div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">PRN Number</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php echo $prn_no; ?>" disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">First Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php echo $fist_name; ?>"disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php echo $m_name; ?>"disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php echo $l_name; ?>"disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Branch</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php echo $branch; ?>"disabled>  
    </div>
    <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Degree</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php echo $degree; ?>"disabled>  
    </div>
</div>

<div class = "container w-50 border rounded-3 mt-5 mb-5 p-3">
    <div class = "fs-3 text-center mb-2">Complaint Information</div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Complaint Catagory</label>
        <select class="form-select" aria-label="Default select example" name = "tc">
            <option value = "" disabled selected>Open this select menu</option>
            <option value="exam">exam</option>
            <option value="classroom">classroom</option>
            <option value="canteen">canteen</option>
            <option value="electricity">electricity</option>
            <option value="lab">lab</option>
            <option value="parking">parking</option>
            <option value="ragging">ragging</option>
            <option value="teaching">teaching</option>
            <option value="others">others</option>
            
        </select>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Complaint</label>
        <textarea type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "complaint" rows="7"></textarea> 
    </div>
</div>

<div class = "text-center">
    <input  value="Submit" type = "submit" class = "btn btn-primary" name = 'insert'>
    <input value="Reset" type = "reset" class = "btn btn-danger">

</div>
</form>

<?php 
    include('./footer.php');
?>