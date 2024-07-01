<?php
    header('Content-Type:text/html; charset=utf-8');

    $files= $_FILES['bbb'];

    //$files 배열임.
    echo count($files) . "<br>";  //결과 : 5
    echo count($files['name']) . "<hr>";  //결과 : 파일개수

    // 선택된 파일의 개수
    $fileNum= count($files['name']);

    for($i=0; $i<$fileNum; $i++){

        $srcName= $files['name'][$i];
        $tmpName= $files['tmp_name'][$i];
        $size= $files['size'][$i];
        $type= $files['type'][$i];

        echo "$srcName <br>";
        echo "$tmpName <br>";
        echo "$size <br>";
        echo "$type <br>";
        echo "=============<br>";

        $dstName= "./uploads/" .  date('YmdHis') . $srcName;
        move_uploaded_file($tmpName, $dstName);
    }


?>