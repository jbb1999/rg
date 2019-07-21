
<?php
session_start();
$errorMsg = "";

$validUser = isset($_SESSION['login']) && $_SESSION["login"];

//$username = $_REQUEST['username'] ?? '';
$password = $_REQUEST['password'] ?? '';

if(isset($_POST["sub"])) {
    $validUser =  $password == "password";
    if(!$validUser) $errorMsg = "password.";
    else $_SESSION["login"] = true;
}

if($validUser) {
    header("Location: admin_page.php");
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Login</title>
</head>
<body>
<form name="input" action="" method="post">
    <label for="password">Password:</label><input type="password" value="" id="password" name="password" />


</form>

<form action="http://localhost/new%20project/oslo.php">
    <input type="submit" value="gå til oslo sider" />
</form>

</body>
</html>
