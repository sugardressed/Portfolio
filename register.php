<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style type="text/css" media="screen">
        .error{
            color: red;
        }
</style>
</head>
<body>
    <h1>Register</h1>
    <?php
    $dir = '...user/';
    $file = $dir . 'users.txt';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
$problem = false;
    if (empty($_POST['username'])){
        echo "<p class='error'>Username is required.</p>";
        $problem = true;
    }
        if (empty($_POST['password1'])){
            echo "<p class='error'>Password is required.</p>";
            $problem = true;
        }
        if (empty($_POST['password2'])){
            echo "<p class='error'>Please confirm your password.</p>";
            $problem = true;
        }
        if ($_POST['password1'] !== $_POST['password2']){
            echo "<p class='error'>Passwords do not match.</p>";
            $problem = true;
        }

    if (!$problem) {

$username = $_POST['username'];
    $password = $_POST['password'];

    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }

    $userData = $username . ',' . password_hash($password, PASSWORD_DEFAULT) . PHP_EOL;
    file_put_contents($file, $userData, FILE_APPEND);
    echo "Registration successful!";
}




?>

    
</body>
</html>