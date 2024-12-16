<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach문</title>
</head>
<body>
    <?php
        $fruits = [
            "apple"=>"사과",
            "strawberry"=>"딸기",
            "banana"=>"바나나",
        ];

        echo "값만 사용<br>";
        foreach ($fruits as $fruit)
        {
            echo "{$fruit}<br>";
        }

        echo "<br>키와 값 모두 사용<br>";
        foreach ($fruits as $eng => $kor)
        {
            echo "{$eng} => {$kor}<br>";
        }
    ?>

    <hr>
    <h1>소스 코드</h1>

        $fruits = [<br>
            "apple"=>"사과",<br>
            "strawberry"=>"딸기",<br>
            "banana"=>"바나나",<br>
        ];<br><br>

        echo "값만 사용<br>";
        foreach ($fruits as $fruit)<br>
        {<br>
            echo "{$fruit}<br>";
        }<br><br>

        echo "&lt;br&gt;키와 값 모두 사용&lt;br&gt;";<br>
        foreach ($fruits as $eng => $kor)<br>
        {<br>
            echo "{$eng} => {$kor}&lt;br&gt;";<br>
        }
</body>
</html>