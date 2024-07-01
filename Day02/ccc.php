<?php
    header('Content-Type:text/html; charset=utf-8');

    // 파일데이터는 너무 커서.. 별도의 임시공간에 비치하고.. php에는 파일정보(택배송장)만 전달됨.

    $file= $_FILES['aaa'];
    //$file은 배열임[파일정보들 ...]
    $srcName= $file['name'];  //원본파일명
    $size= $file['size'];  //파일크기
    $type= $file['type'];  //파일타입
    $error= $file['error'];  //에러가 있다면 에러정보
    $tmpName= $file['tmp_name'];  //임시공간의 위치(주소)

    echo "$srcName <br>";
    echo "$size <br>";
    echo "$type <br>";
    echo "$error <br>";
    echo "$tmpName <br>";

    //임시정보소에 있는 파일데이터를 서버의 특정 위치로 이동
    $dstName= "./uploads/" . date('YmdHis') . $srcName;
    move_uploaded_file($tmpName, $dstName);

?>