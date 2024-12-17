<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 10; $i++)
        {
            echo "{$i}<br>";
            if ($i === 5)
            {
                continue;
            }
        }
    ?>

    <hr>
    <h1>소스 코드</h1>

        for ($i = 1; $i <= 10; $i++)<br>
        {<br>
            echo "{$i}&lt;br&gt;";<br>
            if ($i === 5)<br>
            {<br>
                continue;<br>
            }<br>
        }
</body>
</html>