<?php
    include('./teacherophead.php');
?>

<div class="container w-50 border rounded-3 mt-5 mb-5 p-3">
    <div class = "fs-3  text-center mb-2">Student Information</div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ticket Number</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $ticket = $_GET['ticket'];echo $ticket; ?>" disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">PRN Number</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $prn = $_GET['prn'];echo $prn; ?>" disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">First Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $fname = $_GET['fname'];echo $fname; ?>" disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $mname = $_GET['mname'];echo $mname; ?>" disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $temp = $_GET['lname'];echo $temp; ?>" disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Branch</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $temp = $_GET['branch'];echo $temp; ?>" disabled>  
    </div>
    <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Degree</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $temp = $_GET['degree'];echo $temp; ?>" disabled>  
    </div>
</div>

<div class = "container w-50 border rounded-3 mt-5 mb-5 p-3">
    <div class = "fs-3 text-center mb-2">Complaint Information</div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Complaint Catagory</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $temp = $_GET['catagory'];echo $temp; ?>" disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Complaint</label>
        <textarea type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" rows="7" disabled><?php $temp = $_GET['complaints'];echo $temp; ?></textarea> 
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Status</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $temp = $_GET['status'];echo $temp; ?>" disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Solution</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "
        <?php
            include('../connection.php');
            $ticket = $_GET['ticket'];
            $sql = "SELECT solution FROM complaint WHERE ticket_number = '{$ticket}'";  
            $result = mysqli_query($conn,$sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo $row['solution'];
                }
            }
        ?>" disabled>  
    </div>
</div>


<?php
    include('./footer.php');
?>