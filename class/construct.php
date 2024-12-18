<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>생성자</title>
</head>
<body>
    <?php
        class Constrictor
        {
            public function __construct()
            {
                $a = 1;
                echo $a;
            }
        }
        
        new Constrictor();
    ?>

    <hr>
    <h1>소스 코드</h1>

        class Constrictor<br>
        {<br>
            public function __construct()<br>
            {<br>
                $a = 1;<br>
                echo $a;<br>
            }<br>
        }<br><br>
        
        new Constrictor();<br>
</body>
</html>
