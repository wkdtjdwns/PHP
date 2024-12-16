<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch문</title>
</head>
<body>
    <?php
        $score = 3;
        switch ($score)
        {
            case 1: 
                echo "당신의 점수는 1점 ㅋ<br>";
                break;

            case 2: 
                echo "당신의 점수는 2점 ㅋ<br>";
                break;

            case 3: 
                echo "곽O!<br>";
                break;

            case 4: 
                echo "얘도 곽O!<br>";
                break;

            case 5: 
                echo "당신의 점수는 5점 ㅋ<br>";
                break;
        }
    ?>

    <hr>
    <h1>소스 코드</h1>

        $score = 3;<br>
        switch ($score)<br>
        {<br>
            case 1: <br>
                echo "당신의 점수는 1점 ㅋ&lt;br&gt;";<br>
                break;<br><br>

            case 2: <br>
                echo "당신의 점수는 2점 ㅋ&lt;br&gt;";<br>
                break;<br><br>

            case 3: <br>
                echo "곽O!&lt;br&gt;";<br>
                break;<br><br>

            case 4: <br>
                echo "얘도 곽O!&lt;br&gt;";<br>
                break;<br><br>

            case 5: <br>
                echo "당신의 점수는 5점 ㅋ&lt;br&gt;";<br>
                break;<br>
        }<br>
</body>
</html>