
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>PLMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
    <div id="header"><h1>Programming <br>Lab Management System</h1></div>
    <div class="box" >

        <div id="register">
            <div class="header"><h3>Register As</h3></div>

            <form action="#" method="post">

                <div id="content1">

                    <div id="option">
                    <input type="checkbox"><span >Staff</span><br>
                    <input type="checkbox"><span>Student</span><br>
                    </div>

                    <span id="msg">#Obtain passcode from staff-in-charge.</span>

                    <div id="passcode">
                    <input type="text" name="Passcode" placeholder="PassCode"><br>
                    </div>

                    <div id="reg-btn">
                    <input type="submit" value="Register" >
                    </div>

                </div>

            </form>

        </div>
        <div id="login">
            <div class="header"><h3>Login As</h3></div>
            <form  action="#" method="post">
            <div id="credentials">

                    <div id="username">
                    <input type="text" name="Username" placeholder="Username"><br>
                    </div>
                    <input type="checkbox" style="padding: 5px;"><span>Remember me</span><br>
                    <div id="pass">
                    <input type="password" name="Password" placeholder="Password" >
                    </div>

            </div>


            <span ><a href="#" id="forgot">Forgot Credentials?</a> </span>
            <div>
                <a data-toggle="modal" data-target="#admin" style="color: white;font-size: 14px;padding-left: 4px;">Admin ?</a>
            </div>
            <div id="lgin-btn">
                <input type="submit"  value="Log In">
            </div>
            </form>
           
            <?php
            include "php/adminModal2.php";
            ?>

        </div>
    </div>

    <div id="footer"></div>

</div>

</body>
</html>