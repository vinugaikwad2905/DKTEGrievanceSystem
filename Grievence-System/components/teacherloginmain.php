<?php
    include('../connection.php');
    session_start();
    if(isset($_SESSION['username'])){
        header('location:http://localhost/Grievence-System/components/teachermainpage.php');
    }
?>

<?php
    include('./teacherloginhead.php');
?>

<div class="container-fluid login-image">
    <div class="row">
        <div class="offset-md-3 col-md-6 mt-5 mb-5">
            <div class="rounded-3 pt-5 pb-5 bg-dark text-light ps-5 pe-5">
                <!-- PHP Code -->
                <?php
                    if(isset($_POST['login'])){
                        include('../connection.php');
                        $username = mysqli_real_escape_string($conn,$_POST['username']);
                        $password1 = mysqli_real_escape_string($conn,$_POST['password1']);

                        $sql = "SELECT username FROM faculty WHERE username = '{$username}' AND password1 = '{$password1}'";
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                session_start();
                                $_SESSION['username'] = $row['username'];
                                header('location:http://localhost/Grievence-System/components/teachermainpage.php');
                            }
                        }
                        else{
                            echo "<div class = 'alert alert-danger'>Username and Password did not match.</div>";
                        }
                    }
                ?>
                <!-- End -->
                <h3 class="text-center">Faculty Login</h3>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off" method="post">
                    <div class="mb-3 ps-2 pe-2">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username" name = "username">
                    </div>
                    <div class="mb-5 ps-2 pe-2">
                        <label for="exampleFormControlInput2" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput2" placeholder = "password" name = "password1">
                    </div>
                    <div class="text-center">
                    <input class="btn btn-success me-2" type = "submit" value="Login" name = "login"/>
                        <input class="btn btn-danger me-2" type = "reset" value="Reset"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include('./footer.php');
?>