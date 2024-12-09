<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integer</title>
</head>
<body>
    <?php
        echo 125 ."<br>";           // 10진수 양수
        echo -123 ."<br>";          // 10진수 음수
        echo 0377 ."<br>";          // 8진수; 10진수 값은 255임
        echo 0xFF ."<br>";          //16진수; 10진수 값은 255임
        echo 0b11111111 ."<br>";    // 2진수; 10진수 값은 255임
    ?>

    <hr>
    <h1>소스 코드</h1>

    echo 125 ."&lt;br&gt;";           // 10진수 양수<br>
    echo -123 ."&lt;br&gt;";          // 10진수 음수<br>
    echo 0377 ."&lt;br&gt;";          // 8진수; 10진수 값은 255임<br>
    echo 0xFF ."&lt;br&gt;";          //16진수; 10진수 값은 255임<br>
    echo 0b11111111 ."&lt;br&gt;";    // 2진수; 10진수 값은 255임<br>
</body>
</html>