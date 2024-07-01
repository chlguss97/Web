<?php
    header('Content-Type:text/html; charset=utf-8');

    $name= $_POST['name'];
    $password= $_POST['pw'];
    $gender= $_POST['rg'];
    $message= $_POST['msg'];
    $brand= $_POST['brand'];

    // textarea 안에서의 줄바꿈 문자는 \n을 사용함. 하지만 브러우저는 <br>태그여야만 줄바꿈 되어 그려짐
    $message= nl2br($message);

    echo "<h2>$name</h2>";
    echo "<p>$password</p>";
    echo "<p>$gender</p>";
    echo "<p>$message</p>";
    echo "<p>$brand</p>";

    // 멀티초이스.. 즉, 선택된 과일들..받기
    $fruits= $_POST['fruits'];
    // $fruits는 배열변수임
    // 먼저 배열의 개수를 얻어오기
    $num= count($fruits);

    echo "<table border='1'>";
    echo "<tr>";
    for($i=0; $i<$num; $i++){
        echo "<td>" . $fruits[$i] . "</td>";
    }
    echo "</tr>";
    echo "</table>";


?>