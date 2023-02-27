<?php

$username = $password ='';
$userErr = $passErr ='';
if($_SERVER["REQUEST_METHOD"] =="POST"){
    if(isset($_POST['submit'])){
        if(empty($_POST['username'])){
            $userErr = 'Vui lòng nhập tài khoản';
        }
        else{
            $username =  $_POST['username'];
        }
        if(empty($_POST['password'])){
            $passErr = 'Vui lòng nhập mật khẩu';
        }
        else{
            $password =  $_POST['password'];
        }
        if($username && $password){
            session_start();
            $conn = mysqli_connect('localhost','root','','minn_store');
            $sql = "select * from account where username='$username' and password='$password' ";
            $check = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($check);
            $num_row = mysqli_num_rows($check);
            if($num_row != null && $num_row > 0){
                if($row['position'] == 'user'){
                    $_SESSION['login'] = 1;
                    $_SESSION['username'] = $_POST['username'];
                    header('Location: http://localhost/MINN Store/admin/index.php');
                }
                else if($row['position'] == 'Leader'){
                    $_SESSION['login'] = 1;
                    $_SESSION['username'] = $_POST['username'];
                    header('Location: ./home.php');
                }
            }
        }
            else{
                $passErr = 'Sai Tài khoản hoặc Mật khẩu';
            }

        }

    }



?>

<!DOCTYPE html>
<html lang="en">
<?php
        require_once('head.php');
    ?>
<body>
    <?php
        require_once('header.php');
    ?>
    <!--Sign up-->
    <div class="sign-in-background">
        <div class="sign-in">
                <div class="container">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <h1>Sign in</h1>
                        <div class="sign-in-1">
                            <input type="text" placeholder="Username" name="username">
                            <span style="text-align: center; display : block; margin : 20px; color:red"><?php echo $userErr ?></span>
                            <input type="password" id="myInput" placeholder="Password" name="password">
                            <span style="text-align: center; display : block; margin : 20px; color:red"><?php echo $passErr ?></span>
                         
                            <div class="sign-in-checkbox">
                                <input type="checkbox" onclick="myFunction()">
                                <label for="">Show Password</label>
                            </div>
                            <button type="submit" name="submit">Login</button>
                        </div>
                        <div class="sign-in-2">
                            <p>Already have an account?<a href="./sign-up.php">sign up</a></p>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <?php
        require_once('footer.php');
    ?>
    <?php
        require_once('scripts.php');
    ?>
</body>

</html>