<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable</title>
</head>
<body>
    <?php
        class Variable
        {
            public $name = "PHP-Study";
            public $year = 2024;

            public function phpStudy()
            {
                echo "변수 name은 {$this->name}입니다. <br>";
                echo "변수 year는 {$this->year}입니다. <br>";
                echo $this->name . $this->year . "<br>";
            }
        }

        $variable = new Variable();
        $variable->phpStudy();
    ?>

    <hr>
    <h1>소스 코드</h1>

    class Variable
    {
        public $name = "PHP-Study";
        public $year = 2024;

        public function phpStudy()
        {
            echo "변수 name은 {$this->name}입니다. "&lt;br&gt;";<br>
            echo "변수 year는 {$this->year}입니다. "&lt;br&gt;";<br>
            echo $this->name . $this->year . "&lt;br&gt;";<br>
        }

        $variable = new Variable();<br>
        $variable->phpStudy();<br>
    }
</body>
</html>
