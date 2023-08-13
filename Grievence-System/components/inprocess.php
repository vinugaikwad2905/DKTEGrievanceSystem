<?php
    include('./teacherophead.php');
?>

<div class="container mt-5 mb-5">

    <div class="fs-3 text-center mb-3">In Process</div>

    <table class = "table table-stripped table-hover border">
    <?php
        include('../connection.php');
        
        $sql = "SELECT * FROM complaint WHERE status = 'In Process'";

        $result = mysqli_query($conn,$sql);

        if($result->num_rows > 0){
            echo "<tr>";
                echo "<th>Ticket Number</th>";
                echo "<th>PRN Number</th>";
                echo "<th>Operations</th>";
            echo "</tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                    echo "<td>$row[ticket_number]</td>";
                    echo "<td>$row[prn_number]</td>";
                    echo "<td><a href = 'http://localhost/Grievence-System/components/inprocessupdate.php?ticket=$row[ticket_number]&prn=$row[prn_number]&fname=$row[fname]&mname=$row[mname]&lname=$row[lname]&branch=$row[branch]&degree=$row[degree]&complaints=$row[complaints]&status=$row[status]&catagory=$row[catagory_complaint]' class = 'btn btn-primary'>Update</a></td>";
                echo "</tr>";
            }
        }
        else{
            echo "<div class = 'bg-danger text-light text-center w-50 mx-auto'>Result are : 0</div>";
        }
    ?>
    </table>
</div>

<?php
    include('./footer.php');
?>