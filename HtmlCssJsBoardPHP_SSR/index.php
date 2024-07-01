<?php
    header('Content-Type:text/html; charset=utf-8');

    // MySQL DB와 연결
    $db= mysqli_connect('localhost','mrhi2024','a1s2d3f4!', 'mrhi2024');
    mysqli_query($db, 'set names utf8');

    // 'website_board'테이블에 저장된 모든 게시글 데이터들 가져오는 쿼리문 작성
    $sql= "SELECT * FROM website_board ORDER BY no DESC";
    $result= mysqli_query($db, $sql);

    // 결과표($result)로 부터 게시글을 한줄씩 가져와 boards 배열에 저장하기

    $boards= array(); //빈 배열
    $row_num= mysqli_num_rows($result); //총 레코드 수(줄 수)
    for($i=0; $i<$row_num; $i++){
        $row= mysqli_fetch_array($result, MYSQLI_ASSOC); //연관배열로 주세요
        $boards[$i]= $row;
    }

    // MySQL과 연결 종료
    mysqli_close($db);

    // 게시글의 총 개수 [배열의 개수]
    $boards_size= count($boards);

?>

<!-- 화면 HTML 은 그대로 사용 - 데이터는 php로 mysql에서 가져와서 사용하기 -->

<!DOCTYPE html>
<html>
    <head>
        <title>게시판</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- 외부 스타일시트 연결 -->
        <link rel="stylesheet" href="./css/index.css">

    </head>
    <body>
        
        <!-- 콘텐츠가 표시되는 영역 -->
        <div class="board_wrap">

            <!-- 1. 페이지 제목 영역 -->
            <div class="board_title">
                <h2>자유 게시판</h2>
                <p>자유롭게 게시글을 작성하며 이야기를 나누세요. [ <?php echo "총 개시글 수 : $boards_size";  ?>  ] </p>
            </div>

            <!-- 2. 게시글 리스트를 보여주는 영역 (테이블, 페이지네이션) -->
            <div class="board_list_wrap">
                <!-- 2.1 테이블 영역 -->
                <table class="board_list">
                    <!-- 2.1.1 컬룸 제목줄 -->
                    <tr class="column_title">
                        <!-- 칸별 스타일을 다르게 줄 수도 있기에.. -->
                        <th class="col_no">번호</th>
                        <th class="col_title">제목</th>
                        <th class="col_writer">글쓴이</th>
                        <th class="col_date">작성일</th>
                        <th class="col_hits">조회</th>
                    </tr>

                    <!-- 2.1.2 게시글 데이터들(배열) (여러줄 - JS or PHP 반복문으로 그려내기) ~ 우선 디자인을 위해 가짜 데이터를 3줄 정도 ... -->
                    <?php

                        for($i=0; $i<$boards_size; $i++){
                           
                            $board= $boards[$i];
                           
                            $no= $board['no'];
                            $title= $board['title'];
                            $message= $board['msg'];
                            $writer= $board['writer'];
                            $password= $board['password'];
                            $date= $board['date'];
                            $hits= $board['hits'];

                            echo ("

                                <tr>
                                    <td class='col_no'>$no</td>
                                    <td class='col_title'><a href='./board/view.php?no=$no'>$title</a></td>
                                    <td class='col_writer'>$writer</td>
                                    <td class='col_date'>$date</td>
                                    <td class='col_hits'>$hits</td>
                                </tr>
                            
                            ");

                        }

                    ?>
                    
                </table>

                <!-- 2.2 페이지네이션 영역 -->
                <div class="board_pagination">
                    <a href="#" class="btn">&lt;&lt;</a>
                    <a href="#" class="btn">&lt;</a>
                    <!-- class값을 여러개 지정하는 것이 가능함. 띄어쓰기로 구분 -->
                    <a href="#" class="btn selected">1</a>
                    <a href="#" class="btn">2</a>
                    <a href="#" class="btn">3</a>
                    <a href="#" class="btn">4</a>
                    <a href="#" class="btn">5</a>
                    <a href="#" class="btn">&gt;</a>
                    <a href="#" class="btn">&gt;&gt;</a>
                </div>

            </div>

            <!-- 3. 버튼 표시 영역 -->
            <div class="btn_wrap">
                <a href="./board/write.php">등록</a>
            </div>

        </div>

    </body>
</html>