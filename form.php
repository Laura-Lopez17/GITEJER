<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


if(isset($_POST["user"]) && isset($_POST["pass"])) {
    $user =  $_POST["user"];
    $pass = $_POST["pass"];
    
    if(strlen($user)< 8){
        echo "BAD USER";
        die();
    }

    if(strlen($pass)< 8){
        echo "BAD PASSWORD";
        die();
    }
    
    
}

