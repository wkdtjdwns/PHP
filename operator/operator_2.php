<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비교, 대입 연산자</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 3;

        $r1 = 10;
        $r2 = 10;
        $r3 = 10;
        $r4 = 10;
        $r5 = 10;
        $r6 = 10;

        $r1 = $a;
        $r2 += $a;
        $r3 -= $a;
        $r4 *= $a;
        $r5 /= $a;
        $r6 %= $a;

        echo "비교 연산자<br>";
        echo "a > b는 " . ($a > $b ? 'true' : 'false') . "<br>";
        echo "a >= b는 " . ($a >= $b ? 'true' : 'false') . "<br>";
        echo "a == b는 " . ($a == $b ? 'true' : 'false') . "<br>";
        echo "a != b는 " . ($a != $b ? 'true' : 'false') . "<br>";
        echo "a <> b는 " . ($a <> $b ? 'true' : 'false') . "<br>";


        echo "----------------------------------------------------------------<br>";

        echo "대입 연산자<br>";
        echo "r1 = a는 {$r1}입니다.<br>";
        echo "r2 += a는 {$r2}입니다.<br>";
        echo "r3 -= a는 {$r3}입니다.<br>";
        echo "r4 *= a는 {$r4}입니다.<br>";
        echo "r5 /= a는 {$r5}입니다.<br>";
        echo "r6 %= a는 {$r6}입니다.<br>";
    ?>

    <hr>
    <h1>소스 코드</h1>

        $a = 5;<br>
        $b = 3;<br><br>

        $r1 = 10;<br>
        $r2 = 10;<br>
        $r3 = 10;<br>
        $r4 = 10;<br>
        $r5 = 10;<br>
        $r6 = 10;<br><br>

        $r1 = $a;<br>
        $r2 += $a;<br>
        $r3 -= $a;<br>
        $r4 *= $a;<br>
        $r5 /= $a;<br>
        $r6 %= $a;<br><br>

        echo "비교 연산자&lt;br&gt;";<br>
        echo "a > b는 ". ($a > $b ? 'true' : 'false') ."&lt;br&gt;";<br>
        echo "a >= b는 ". ($a >= $b ? 'true' : 'false') ."&lt;br&gt;";<br>
        echo "a == b는 ". ($a == $b ? 'true' : 'false') ."&lt;br&gt;";<br>
        echo "a != b는 ". ($a != $b ? 'true' : 'false') ."&lt;br&gt;";<br>
        echo "a <> b는 ". ($a <> $b ? 'true' : 'false') ."&lt;br&gt;";<br><br>

        echo "----------------------------------------------------------------"&lt;br&gt;";<br><br>

        echo "대입 연산자"&lt;br&gt;";<br>
        echo "r1 = a는 {$r1}입니다.&lt;br&gt;";<br>
        echo "r2 += a는 {$r2}입니다.&lt;br&gt;";<br>
        echo "r3 -= a는 {$r3}입니다.&lt;br&gt;";<br>
        echo "r4 *= a는 {$r4}입니다.&lt;br&gt;";<br>
        echo "r5 /= a는 {$r5}입니다.&lt;br&gt;";<br>
        echo "r6 %= a는 {$r6}입니다.&lt;br&gt;";<br>
</body>
</html>