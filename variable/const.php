<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>const</title>
</head>
<body>
    <?php
        define("CONST_BOOL", true); // 상수 CONST_BOOL을 true로 정의함
        define("CONST_INT", 1);
        define("CONST_FLOAT", 3.14);
        define("CONST_STRING", "문자열도 가능함");
        const OTHER = "또 다른 상수 정의방법";
        # define("CONSTANT_INT", false); // 에러

        const COUNTRY = "KOREA";
        echo COUNTRY;
    ?>

    <hr>
    <h1>소스 코드</h1>

    define("CONST_BOOL", true); // 상수 CONST_BOOL을 true로 정의함<br>
    define("CONST_INT", 1);<br>
    define("CONST_FLOAT", 3.14);<br>
    define("CONST_STRING", "문자열도 가능함");<br>
    const OTHER = "또 다른 상수 정의방법";<br>
    # define("CONSTANT_INT", false); // 에러<br><br>

    const COUNTRY = "KOREA";<br>
    echo COUNTRY;
</body>
</html>