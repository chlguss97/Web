<?php
    header('Content-Type:text/html; charset=utf-8');

    // GET방식으로 전달된 데이터 받기
    $title= $_GET['title'];
    $message= $_GET['msg'];

    // php를 실행하는 웹 브라우저에게 응답 echo
    echo "$title &nbsp;&nbsp;&nbsp;&nbsp; $message";

?>