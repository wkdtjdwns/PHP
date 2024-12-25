<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final</title>
</head>
<body>
    <?php
        final class FinalParent
        {
            public $final = "final으로 선언된 클래스";
            
            public final function echoFinal()
            {
                echo "final로 선언된 메소드<br>";
                echo $this->final;
            }
        }

        class Child extends FinalParent // final로 선언된 클래스 상속 -> 오류
        {

        }
        
        $child = new Child();
        $child->echoFinal();
    ?>
</body>
</html>