<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>public</title>
</head>
<body>
    <?php
        class Parent1
        {
            public $public = "public";
        }
        
        class Child1 extends Parent1
        {
            public function echoP()
            {
                echo $this->public;
            }
        }

        $child = new Child1();
        $child->echoP();
    ?>

    <hr>
    <h1>소스 코드</h1>

        class Parent1<br>
        {<br>
            public $public = "public";<br>
        }<br><br>
        
        class Child1 extends Parent1<br>
        {<br>
            public function echoP()<br>
            {<br>
                echo $this->public;<br>
            }<br>
        }<br><br>

        $child = new Child1();<br>
        $child->echoP();
</body>
</html>
