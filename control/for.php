<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for문</title>
</head>
<body>
    <?php
        for ($i = 0; $i <= 10; $i++)
        {
            echo "{$i}<br>";
            if ($i === 10)
            {
                echo "\$i가 {$i}이므로 for문은 종료됩니다.";
            }
        }
    ?>

    <hr>
    <h1>소스 코드</h1>

        for ($i = 0; $i <= 10; $i++)<br>
        {<br>
            echo "{$i}&lt;br&gt;";<br>
            if ($i === 10)<br>
            {<br>
                echo "\$i가 {$i}이므로 for문은 종료됩니다.";<br>
            }<br>
        }
</body>
</html>