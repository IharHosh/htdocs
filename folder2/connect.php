<?php
 
    $connect = mysqli_connect('localhost','root', 'root', 'vit');
 
    if (!$connect) {
        die('Error connect to DataBase'); 
    }