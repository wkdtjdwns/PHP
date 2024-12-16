<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if문</title>
</head>
<body>
    <?php
        $score = 3;
        if ($score == 3)
        {
            echo "곽O!<br>";
        } else if ($score == 4) {
            echo "얘도 곽O!<br>";
        } else {
            echo "곽O 아님!<br>";
        }
    ?>

    <hr>
    <h1>소스 코드</h1>

        $score = 3;<br>
        if ($score == 3)<br>
        {<br>
            echo "곽O!&lt;br&gt;";<br>
        } else if ($score == 4) {<br>
            echo "얘도 곽O!&lt;br&gt;";<br>
        } else {<br>
            echo "곽O 아님!&lt;br&gt;";<br>
        }
</body>
</html>