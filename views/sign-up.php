<!DOCTYPE html>
<html lang="en">
<?php
    require_once('head.php');
?>
<body>
    <?php
        require_once('header.php');
    ?>
    <!--Sign in-->
    <div class="sign-in-background">
        <div class="sign-in">
                <div class="container">
                    <form>
                        <h1>sign-up</h1>
                        <div class="sign-in-1">
                            <input type="text" placeholder="Username">
                            <input type="password" id="myInput" placeholder="Password" >
                            <input type="password" id="myInput2" placeholder="Re-Password" >
                            <div class="sign-in-checkbox">
                                <input type="checkbox" onclick="myFunction()">
                                <label for="">Show Password</label>
                            </div>
                            <button>sign up</button>
                        </div>
                        <div class="sign-in-2">
                            <p>Forgot <a href="">Username/ Password?</a></p>
                            <p>Don't have an account? <a href="./sign-in.php">Sign in</a></p>
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