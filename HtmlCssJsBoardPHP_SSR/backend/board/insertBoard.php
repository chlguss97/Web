<?php
    header('Content-Type:text/html; charset=utf-8');

    // write.php로 부터 전달받은 데이터들
    $title= $_POST['title'];
    $writer= $_POST['writer'];
    $password= $_POST['pw'];
    $message= $_POST['msg'];

    $now= date('Y.m.d');
    $hits= 0;

    // MySQL DB와 연결
    $db= mysqli_connect('localhost','mrhi2024','a1s2d3f4!','mrhi2024');
    mysqli_query($db, 'set names utf8');

    // 'website_board'테이블에 값을 저장하는 쿼리문
    $sql="INSERT INTO website_board(title, msg, writer, password, date, hits) VALUES('$title','$message','$writer','$password','$now','$hits')";
    $result= mysqli_query($db, $sql);

    if($result){
        echo "<script> location.href='../../index.php' </script>";

    }else{
        echo "<h2>게시글 저장에 오류가 발생했습니다. 다시 시도해주시기 바랍니다.</h2>";
    }


    // MySQL 닫기
    mysqli_close($db);

?>