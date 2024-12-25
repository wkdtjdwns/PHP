<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static</title>
</head>
<body>
    <?php
        class StaticTest
        {
            public static $static = "static으로 선언 ㅋ<br>";
            
            public static function echoStatic()
            {
                $static = "static으로 선언 ㅋ<br>";
                echo $static;
            }
        }
        
        echo StaticTest::$static;
        StaticTest::echoStatic();
    ?>

    <hr>
    <h1>소스 코드</h1>

    class StaticTest<br>
    {<br>
        public static $static = "static으로 선언 ㅋ&lt;br&gt;";<br><br>
        
        public static function echoStatic()<br>
        {<br>
            $static = "static으로 선언 ㅋ&lt;br&gt;";<br>
            echo $static;<br>
        }<br>
    }<br><br>

    echo StaticTest::$static;<br>
    StaticTest::echoStatic();
</body>
</html>