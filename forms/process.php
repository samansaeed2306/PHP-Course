<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    ECHO "POST REQ";
    echo "<br>";
    $username = htmlspecialchars(trim($_POST["username"]));
    $password =htmlspecialchars(trim( $_POST["password"]));
    $status = htmlspecialchars(trim($_POST["status"]));

    echo $username . "<br>";
    echo $password . "<br>";
    echo $status . "<br>";

}