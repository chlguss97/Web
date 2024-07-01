<?php
    header('Content-Type:text/plain; charset=utf-8');

    $title= $_GET['title'];
    $message= $_GET['msg'];

    echo "제목 : $title\n";
    echo "내용 : $message";
?>