<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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

            <form action="register.php" method="post">

                <div id="content1">

<<<<<<< HEAD
                    <div id="option">
                    <input type="radio" name="registeras" checked><span >Staff</span><br>
                    <input type="radio" name="registeras"><span>Student</span><br>
=======
                    <div class="radio" id="option">
                    <input type="radio"><span >Staff</span><br>
                    <input type="radio"><span>Student</span><br>
>>>>>>> 725b5ae4758b237ec3d6fcb6c4dde83f0ee67e0a
                    </div>

                    <span id="msg">Obtain passcode from staff-in-charge</span>

                    <div id="passcode">
<<<<<<< HEAD
                    <input type="text" name="Passcode" required="" placeholder="Passcode"><br>
                    </div>

                    <div id="reg-btn">
                    <input type="submit" value="Register"></input>
=======
                    <input type="text" class="form-control" name="Passcode" placeholder="PassCode"><br>
                    </div>

                    <div id="reg-btn">
<<<<<<< HEAD:public_html/login.html
                    <input type="submit" class="btn btn-large"value="Register" ></input>
>>>>>>> 725b5ae4758b237ec3d6fcb6c4dde83f0ee67e0a
=======
                    <input type="submit" class="btn btn-large" value="Register" ></input>
>>>>>>> e3d54e73a23e5ed9c61c7c0dbf97e0087b333e94:public_html/login2.php
                    </div>

                </div>

            </form>

        </div>
        <div id="login">
            <div class="header"><h3>Login As</h3></div>
            <div id="credentials">
<<<<<<< HEAD:public_html/login.html
                <form  action="login.php" method="post">
                    <div id="username">
<<<<<<< HEAD
                    <input type="text" name="Username" required="" placeholder="Username"><br>
=======
                    <input class="form-control" type="text" name="Username" placeholder="Username"><br> 
>>>>>>> 725b5ae4758b237ec3d6fcb6c4dde83f0ee67e0a
                    </div>
                    <div id="pass">
<<<<<<< HEAD
                    <input type="password" name="Password" required="" placeholder="Password" >
=======
=======
                <form  action="#" method="post">
                    <div id="username" style="padding-bottom: 2px;">
                    <input class="form-control" type="text" name="Username" placeholder="Username">
                    </div>
                    <input type="checkbox" style="padding: 5px;"><span>Remember me</span><br>
                    <div id="pass" style="padding-top: 2px;">
>>>>>>> e3d54e73a23e5ed9c61c7c0dbf97e0087b333e94:public_html/login2.php
                    <input class="form-control" type="password" name="Password" placeholder="Password" >
>>>>>>> 725b5ae4758b237ec3d6fcb6c4dde83f0ee67e0a
                    </div>
                </form>
            </div>

<<<<<<< HEAD
            <span ><a href="#" id="forgot">Forgot credentials?</a> </span>

            <div id="lgin-btn">
                <input type="submit"  value="Log In"></input>
            </div>
               </div>
=======
            <span ><a href="#" id="forgot">Forgot Credentials?</a> </span>


            <div>
            	 <a data-toggle="modal" data-target="#adminlogin" style="color:white;padding-left:4px;font-size: 16px;">Admin ?</a>
             </div>
                 <input  class="btn btn-large" type="submit"  value="Log In"></input>


>>>>>>> 725b5ae4758b237ec3d6fcb6c4dde83f0ee67e0a

        </div>
    </div>

    <div id="footer"></div>

</div>

</body>
</html>
