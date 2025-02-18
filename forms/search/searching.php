<?php

if($_SERVER["REQUEST_METHOD"]== "GET"){
    $query = $_GET["query"];
    echo $query;
}