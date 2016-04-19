<?php
include_once 'connect.php';

$user = $conn->real_escape_string($_POST['adminU']);
$pass = $conn->real_escape_string($_POST['adminP']);

if($user == "" || $pass == "")
    echo "0";
else {

    $sql = " SELECT * FROM ADMIN 
        WHERE AdminU = '$user' AND AdminP = '$pass';
        ";
    $res = $conn->query($sql) or die($conn->error);
    if ($res->num_rows > 0)
        echo "1";
    else
        echo "0";
}

?>

