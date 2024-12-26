<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>함수</title>
</head>
<body>
    <?php
        function sum($num1, $num2)
        {
            $num3 = $num1 + $num2;
            return $num3;
        }

        echo sum(4, 7);
    ?>

    <hr>
    <h1>소스 코드</h1>

        function sum($num1, $num2)<br>
        {<br>
            $num3 = $num1 + $num2;<br>
            return $num3;<br>
        }<br><br>

        echo sum(4, 7);<br>
</body>
</html>
