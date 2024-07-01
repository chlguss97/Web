<?php
    header('Content-Type:text/plain; charset=utf-8');

    //json 받기
    $data= file_get_contents('php://input');

    //json을 분석하여 값들을 뽑아오기 - 연관배열로
    $a= json_decode($data, true);//두번째 파라미터  true : 연관배열 여부

    $email= $a['email'];
    $password= $a['pw'];

    echo "이메일 : $email \n";
    echo "비밀번호 : $password";

?>