<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while문</title>
</head>
<body>
    <?php
        $i = 1;
        while ($i <= 10)
        {
            echo "{$i}<br>";
            if ($i === 10)
            {
                echo "\$i가 {$i}이므로 while문은 종료됩니다.";
            }

            $i++;
        }
    ?>

    <hr>
    <h1>소스 코드</h1>

        $i = 1;<br>
        while ($i <= 10)<br>
        {<br>
            echo "{$i}&lt;br&gt;";<br>
            if ($i === 10)<br>
            {<br>
                echo "\$i가 {$i}이므로 while문은 종료됩니다.";<br>
            }<br><br>

            $i++;<br>
        }
</body>
</html>