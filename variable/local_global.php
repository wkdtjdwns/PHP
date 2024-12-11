<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>local-global</title>
</head>
<body>
    <?php
        // $color = "red";
        // function echoColor() {
        //     echo "color: {$color}"; // 위에서 선언한 $color는 지역변수이기 때문에 여기서는 사용 불가
        // }

        // echoColor();
    ?>

    <?php
        $color = "red";
        function echoColor() {
            global $color; // 외부의 $color를 사용하기 위해 global(전역변수)로 선언함.
            echo "color: {$color}";
        }

        echoColor();
    ?>

    

    <hr>
    <h1>소스 코드</h1>

    &lt;?php<br>
        &nbsp;&nbsp;// $color = "red";<br>
        &nbsp;&nbsp;// function echoColor() {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;//     echo "color: {$color}"; // 위에서 선언한 $color는 지역변수이기 때문에 여기서는 사용 불가<br>
            &nbsp;&nbsp;// }<br><br>

        &nbsp;&nbsp;// echoColor();<br>
    ?><br><br>

    &lt;?php<br>
        &nbsp;&nbsp;$color = "red";<br>
        &nbsp;&nbsp;function echoColor() {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;global $color; // 외부의 $color를 사용하기 위해 global(전역변수)로 선언함.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "color: {$color}";<br>
            &nbsp;&nbsp;}<br><br>

        &nbsp;&nbsp;echoColor();<br>
    ?><br>
</body>
</html>