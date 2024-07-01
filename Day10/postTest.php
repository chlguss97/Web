<?php
    header('Content-Type:text/plain; charset=utf-8');

    $user_id= $_POST['user_id'];
    $user_pw= $_POST['user_pw'];

    echo "$user_id ${user_pw}에 대한 요청 입니다.";

?>