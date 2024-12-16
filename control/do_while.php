<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do-while문</title>
</head>
<body>
    <?php
        $i = 11;
        do
        {
            echo "{$i}<br>";
            if ($i === 10)
            {
                echo "\$i가 {$i}이므로 while문은 종료됩니다.";
            }

            $i++;
        } while ($i <= 10)
    ?>

    <hr>
    <h1>소스 코드</h1>

        $i = 11;<br>
        do<br>
        {<br>
            echo "{$i}&lt;br&gt;";<br>
            if ($i === 10)<br>
            {<br>
                echo "\$i가 {$i}이므로 while문은 종료됩니다.";<br>
            }<br><br>

            $i++;<br>
        } while ($i <= 10)
</body>
</html>