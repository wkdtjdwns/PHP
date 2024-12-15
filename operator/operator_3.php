<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>논리 연산자</title>
</head>
<body>
    <?php
        $a = true;
        $b = false;

        echo "a and b는 ". ($a and $b). "<br>";
        echo "a or b는 ". ($a or $b). "<br>";
        echo "a xor b는 ". ($a xor $b). "<br>";
        echo "!a는 ". (!$a). "<br>";
        echo "a && b는 ". ($a && $b). "<br>";
        echo "a || b는 ". ($a || $b). "<br>";
    ?>

    <hr>
    <h1>소스 코드</h1>

        $a = true;<br>
        $b = false;<br><br>

        echo "a and b는 ". ($a and $b). "&lt;br&gt;";<br>
        echo "a or b는 ". ($a or $b). "&lt;br&gt;";<br>
        echo "a xor b는 ". ($a xor $b). "&lt;br&gt;";<br>
        echo "!a는 ". (!$a). "&lt;br&gt;";<br>
        echo "a && b는 ". ($a && $b). "&lt;br&gt;";<br>
        echo "a || b는 ". ($a || $b). "&lt;br&gt;";<br>
</body>
</html>