<?php
    include('./teacherheadmain.php');
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
        <label for="exampleFormControlInput1" class="form-label">Complaint</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $temp = $_GET['complaints'];echo $temp; ?>" disabled>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Status</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name = "exampleFormControlInput1" value = "<?php $temp = $_GET['status'];echo $temp; ?>" disabled>  
    </div>
</div>

<div class = "container w-50 border rounded-3 mt-5 mb-5 p-3">
    <div class = "fs-3 text-center mb-2">Update Information</div>
    <label for="exampleFormControlInput1" class="form-label">Change Status</label>
    <form action = "" method = "post">
        <?php
            include('../connection.php');
            if(isset($_POST['update'])){
                if(!empty($_POST['status'])) {
                    $selected = $_POST['status'];
                    // echo 'You have chosen: ' . $selected;
                    $ticket = $_GET['ticket'];
                    $sql = "UPDATE complaint SET status = '{$selected}' WHERE ticket_number = '{$ticket}'";

                    $result = mysqli_query($conn,$sql);
                    if($result){
                        echo "<script>";
                        echo 'window.location.assign("http://localhost/Grievence-System/components/notyetprocess.php")';
                        echo "</script>";
                    }else{
                        echo "error";
                    }
                }
            }
        ?>
        <select class="form-select" aria-label="Default select example" name = "status">
            <option value = "" disabled selected>Open this select menu</option>
            <option value="Not Yet Process">Not Yet Process</option>
            <option value="In Process">In Process</option>
            <option value="Completed">Completed</option>
        </select>
        <div class = "mt-2 text-center">
            <input type = "submit" class = "btn btn-success" value = "Update" name = "update"/>
        </div>
    </form>
</div>

<?php
    include('./footer.php');
?>