<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Computational Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/6.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="jss/script.js" ></script>
</head>

<body >
<!--********************* H E A D E R *******************-->
<header></header>
<!--***************** N A V I G A T I O N ***************-->
<div id="navigation"><?php include_once 'php/course_home_student_nav.php'?>
</div>
<!--********************* C O N T E N T *****************-->
<div id="content">
<section >
    <div class="container" >
        <span style="font-size: 30px;color: #33334d;font-weight: 600"><hr>#Problem Set<hr></span>
        <table class="table table-hover">
        <tr>
            <th>Sl.No</th>
            <th>Problem</th>
            <th>Status</th>
        </tr>
        <tr class="accepted">
            <td>1</td>
            <td><a href="#">N-array</a></td>
            <td>Accepted</td>
        </tr>
        <tr class="not_tried">
            <td>2</td>
            <td><a href="#">String Sort</a></td>
            <td>Not Tried Yet!</td>
        </tr>
        <tr class="wrong">
            <td>3</td>
            <td><a href="#">Magic Numbers</a></td>
            <td>Wrong-Algorithm</td>

        </tr>
    </table>

        <div id="msgs" >
            <table class="table table-hover" id="m">
                <tr>
                    <th>Messages</th>
                </tr>
                <tr>
                    <td><p>Message 1mmmmmmmm   mmmmm mmmm mmmmm</p></td>
                </tr>
            </table>
        </div>
        </div>
</section>
</div>
<!--********************* S I D E  B A R ****************-->

<aside>

</aside>

<!--********************* F O O T E R *******************-->
<div class="container-fluid" style="padding: 0px;"><footer><hr class="s"></footer></div>

</div>
</body>
</html>