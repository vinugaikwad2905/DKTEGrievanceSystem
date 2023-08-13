<?php
    include('./studinnerpagehead.php');
    $prn = $_GET['prn'];
?>

<ul class="nav nav-pills mb-5 bg-light">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="http://localhost/Grievence-System/components/studentmainpage.php?prn=<?php echo $prn ?>">Under Scrutiny</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/Grievence-System/components/raisecomplaintpage.php?prn=<?php echo $prn ?>">Raise Complaints</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="http://localhost/Grievence-System/components/rejectedpage.php?prn=<?php echo $prn ?>">Rejected</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href = "http://localhost/Grievence-System/components/historypage.php?prn=<?php echo $prn ?>">Completed</a>
  </li>
</ul>

<div class = "container">
    <table class = "table table-stripped table-hover border">
    <?php
        include('../connection.php');
        
        $sql = "SELECT * FROM complaint WHERE status = 'Rejected' AND prn_number = '{$prn}'";

        $result = mysqli_query($conn,$sql);

        if($result->num_rows > 0){
            echo "<tr>";
                echo "<th>Ticket Number</th>";
                echo "<th>PRN Number</th>";
                echo "<th>View</th>";
            echo "</tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                    echo "<td>$row[ticket_number]</td>";
                    echo "<td>$row[prn_number]</td>";
                    echo "<td><a href = 'http://localhost/Grievence-System/components/rejected.php?ticket=$row[ticket_number]&prn=$row[prn_number]&fname=$row[fname]&mname=$row[mname]&lname=$row[lname]&branch=$row[branch]&degree=$row[degree]&complaints=$row[complaints]&status=$row[status]&catagory=$row[catagory_complaint]&solution=$row[solution]' class = 'btn btn-primary'>View</a></td>";
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