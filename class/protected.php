<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>protected</title>
</head>
<body>
    <?php
        class OutSider
        {
            protected $s = "OutSider";
        }
        
        class OutSider2 extends OutSider
        {
            public function echoS()
            {
                echo $this->s;
            }
        }

        $outSider = new OutSider2();
        $outSider->echoS();
    ?>

    <hr>
    <h1>소스 코드</h1>

        class OutSider<br>
        {<br>
            protected $s = "OutSider";<br>
        }<br><br>
        
        class OutSider2 extends OutSider<br>
        {<br>
            public function echoS()<br>
            {<br>
                echo $this->s;<br>
            }<br>
        }<br><br>

        $outSider = new OutSider2();<br>
        $outSider->echoS();
</body>
</html>
