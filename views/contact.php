<!DOCTYPE html>
<html lang="en">
<?php
        require_once('head.php');
    ?>
<body>
    <?php
        require_once('header.php');
    ?>
    <!--Contact-->
    <div class="contact-background">
        <div class="contact">
            <form action="">
                <h1>get in touch</h1>
                <div class="line-1-2">
                    <div class="line">
                        <ul>
                            <li><input type="text" placeholder="First Name"></li>
                            <li><input type="text" placeholder="Last Name"></li>
                        </ul>
                    </div>
                    <div class="line">
                        <ul>
                            <li><input type="text" placeholder="Email"></li>
                            <li><input type="text" placeholder="Phone"></li>
                        </ul>
                    </div>
                </div>
                <div class="line-3-4">
                    <ul>
                        <li><input type="text" placeholder="Address"></li>
                        <li><textarea name="" id="" cols="52" rows="3" placeholder="Type your message here"></textarea></li>
                    </ul>
                </div>
                <div class="contact-btn">
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
                <p>Thanks for submitting!</p>
            </form>
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