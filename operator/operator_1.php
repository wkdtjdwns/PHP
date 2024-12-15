<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>산술, 증감 연산자</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 3;
        $c1 = 0;
        $c2 = 0;
        $c3 = 0;
        $c4 = 0;
        $c5 = 0;

        $c1 = $a + $b;
        $c2 = $a - $b;
        $c3 = $a * $b;
        $c4 = $a / $b;
        $c5 = $a % $b;

        echo "산술 연산자<br>";
        echo "a + b는 {$c1}입니다.<br>";
        echo "a - b는 {$c2}입니다.<br>";
        echo "a * b는 {$c3}입니다.<br>";
        echo "a / b는 {$c4}입니다.<br>";
        echo "a % b는 {$c5}입니다.<br>";

        echo "----------------------------------------------------------------<br>";

        echo "증감 연산자<br>";
        echo "++a는 ". ++$a ."입니다.<br>";
        echo "--a는 ". --$a ."입니다.<br>";
        echo "a++는 ". $a++ ."입니다.<br>";
        echo "a--는 ". $a-- ."입니다.<br><br>";
        echo "변수 a는 ". $a ."입니다.";
    ?>

    <hr>
    <h1>소스 코드</h1>

        $a = 5;<br>
        $b = 3;<br>
        $c1 = 0;<br>
        $c2 = 0;<br>
        $c3 = 0;<br>
        $c4 = 0;<br>
        $c5 = 0;<br><br>

        $c1 = $a + $b;<br>
        $c2 = $a - $b;<br>
        $c3 = $a * $b;<br>
        $c4 = $a / $b;<br>
        $c5 = $a % $b;<br>

        echo "산술 연산자"&lt;br&gt;";<br>
        echo "a + b는 {$c1}입니다."&lt;br&gt;";<br>
        echo "a - b는 {$c2}입니다."&lt;br&gt;";<br>
        echo "a * b는 {$c3}입니다."&lt;br&gt;";<br>
        echo "a / b는 {$c4}입니다."&lt;br&gt;";<br>
        echo "a % b는 {$c5}입니다."&lt;br&gt;";<br><br>

        echo "----------------------------------------------------------------"&lt;br&gt;";<br><br>

        echo "증감 연산자"&lt;br&gt;";<br>
        echo "++a는 ". ++$a ."입니다."&lt;br&gt;";<br>
        echo "--a는 ". --$a ."입니다."&lt;br&gt;";<br>
        echo "a++는 ". $a++ ."입니다."&lt;br&gt;";<br>
        echo "a--는 ". $a-- ."입니다."&lt;br&gt;&lt;br&gt;";<br><br>
        echo "변수 a는 ". $a ."입니다.";
</body>
</html>