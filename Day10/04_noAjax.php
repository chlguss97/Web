<?php
    header('Content-Type:text/html; charset=utf-8');

    $user_id= $_GET['user_id'];
    $user_pw= $_GET['user_pw'];

    // 보통 이 데이터들을 DB에 보내서 검증함... 시간상..그냥 echo..
    //echo "<h5>$user_id $user_pw 가 로그인되었습니다.</h5>"

    // 사용자가 페이지가 변경되는 느낌을 받지 않으려면..
    // 이전 페이지를 그대로 echo하며 데이터를 표시해야함.
    // echo ("

    // <!DOCTYPE html>
    // <html>
    //     <head>
    //         <title>로그인</title>
    //         <meta charset='utf-8'>
    //     </head>

    //     <body>
            
    //         <h3>로그인 페이지</h3>

    //         <form action='./04_noAjax.php' method='get'>
    //             <input type='text' name='user_id' placeholder='아이디' value='$user_id'>
    //             <input type='text' name='user_pw' placeholder='비밀번호' value='$user_pw'>

    //             <input type='submit' value='로그인'>
    //         </form>

    //         <hr>

    //         <h5>로그인 요청 결과</h5>
    //         <textarea cols='50' rows='3' id='ta'>$user_id $user_pw 가 로그인 되었습니다.</textarea>

    //     </body>
    // </html>

    // ")
?>

<!-- php의 영역 밖에 쓰면 브라우저는 그냥 문서 데이터로 봄. 이곳에 html태그를 쓰면 인식함.. -->
<html>
    <head>
        <title>로그인</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>로그인 페이지</h3>

        <form action="./04_noAjax.php" method="get">
            <input type="text" name="user_id" placeholder="아이디" value="<?= $user_id ?>">
            <input type="text" name="user_pw" placeholder="비밀번호" value="<?= $user_pw ?>">

            <input type="submit" value="로그인">
        </form>

        <hr>

        <h5>로그인 요청 결과</h5>
        <textarea cols="50" rows="3" id="ta"> <?php echo $user_id; ?> <?php echo $user_pw; ?> 가 로그인 되었습니다.  </textarea>
    </body>
</html>

