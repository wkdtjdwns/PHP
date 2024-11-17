<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오늘의 날짜는?</title>
</head>
<body>
    <!-- php 구문 -->
    <?php
        // 변수 생성: $변수명 = 값;
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        $today = date('Y-m-d');
    ?>

    <!-- html 구문 -->
    일반적인 HTML 페이지의 형태입니다.<br>

    <!-- php의 변수를 html에 불러오는 방법 4가지 -->
    올해는 <?php echo $year ?>년 입니다.<br>
    지금는 <? echo $month ?>월 입니다.<br>
    오늘은 <?= $day ?>일 입니다.<br>
    오늘 날짜는 <script language="php"> echo $today; </script>입니다.<br>
</body>
</html>
