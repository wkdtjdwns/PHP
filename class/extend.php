<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상속</title>
</head>
<body>
    <?php
        class Parents
        {
            public $parent = "부모 클래스의 변수입니당 ㅎㅎ.";
        }
        
        class Child extends Parents
        {
            public function echoParent()
            {
                echo $this->parent;
            }
        }

        $child = new Child();
        $child->echoParent();
    ?>

    <hr>
    <h1>소스 코드</h1>

        class Parents<br>
        {<br>
            public $parent = "부모 클래스의 변수입니당 ㅎㅎ.";<br>
        }<br><br>
        
        class Child extends Parents<br>
        {<br>
            public function echoParent()<br>
            {<br>
                echo $this->parent;<br>
            }<br>
        }<br><br>

        $child = new Child();<br>
        $child->echoParent();
</body>
</html>
