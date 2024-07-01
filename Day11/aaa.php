<?php
    header('Content-Type:text/plain; charset=utf-8');

    $email= $_GET['email'];
    $password= $_GET['pw'];

    echo "$email 과 $password 를 요청했습니다.";
?>