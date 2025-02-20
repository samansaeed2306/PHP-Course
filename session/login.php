<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $admin_username = "Saman";
    $admin_password = "secret";

  $input_username = $_POST["username"];
  $input_password = $_POST["password"];
//   echo $input_username;
//   echo $input_password;

  if($input_username === $admin_username && $input_password === $admin_password){
    echo "Login success";
    //Set session values
    $_SESSION["logged_in"]= true;
    $_SESSION["username"]=$input_username;

    header("Location: admin.php");
    exit;

  }else{
    $message = "Invalid username or password.";
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <?php if(isset(($message))):?>
    <p style="color:red"><?php echo $message ?></p>
    <?php endif;?>

    <form method="POST">
        <label for="username" >Username: </label>
        <input id="username" name="username" type="text"><br><br>
        <label for="password">Password: </label>
        <input id="password" name="password" type="password"><br><br>

        <input type=submit value="Login">
    </form>
    
</body>
</html>