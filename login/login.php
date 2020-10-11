<?php
session_start();
if (isset($_SESSION["username"])) {
    session_destroy();
}
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$username = addslashes($username);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);
$result = $data->slt_usrNmeByUnmePswd($username, $password);
$count = mysqli_num_rows($result);
}
if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
    }
    $_SESSION["name"]     = $name;
    $_SESSION["username"] = $username;
    header("location:../new/start.php");
} else
    header("location:$ref?w=Wrong Username or Password");


?>