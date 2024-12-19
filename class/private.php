<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>private</title>
</head>
<body>
    <?php
        class OutSider
        {
            private $s = "OutSider";
        }

        $o = new OutSider();
        echo $o->s; // 오류
    ?>
</body>
</html>
