<?php
    header('Content-Type:text/plain; charset=utf-8');

    $email= $_POST['email'];
    $password= $_POST['pw'];

    echo "$email : $password";
?>