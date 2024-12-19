<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>멤버변수</title>
</head>
<body>
    <?php
        class Member
        {
            public $m;
            public $m1 = "멤버변수입니다 ㅎㅎ";

            public function __construct()
            {
                $m = "지역변수입니다 ㅎㅎ";
                echo "{$m}<br>";
            }
        }

        $member = new Member();
        echo "초기화하지 않은 멤버변수: {$member->m}<br>";
        echo "초기화한 멤버변수: {$member->m1}<br>";
    ?>

    <hr>
    <h1>소스 코드</h1>

        class Member<br>
        {<br>
            public $m;<br>
            public $m1 = "멤버변수입니다 ㅎㅎ";<br><br>

            public function __construct()<br>
            {<br>
                $m = "지역변수입니다 ㅎㅎ";<br>
                echo "{$m}&lt;br&gt;";<br>
            }<br>
        }<br><br>

        $member = new Member();<br>
        echo "초기화하지 않은 멤버변수: {$member->m}&lt;br&gt;";<br>
        echo "초기화한 멤버변수: {$member->m1}&lt;br&gt;";<br>
</body>
</html>
