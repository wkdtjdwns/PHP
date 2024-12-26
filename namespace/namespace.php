<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>namespace</title>
</head>
<body>
    <?php
        namespace Wkdtjdwns\WkdStudy;

        class Student
        {
            protected $_name;
        
            public function __construct($name)
            {
                $this->_name = $name;
            }
        
            public function name()
            {
                return $this->_name;
            }
        }
        
        namespace Wkdtjdwns\PhpStudy;
        
        class Student
        {
            protected $_name;
        
            public function __construct($name)
            {
                $this->_name = $name;
            }
        
            public function name()
            {
                return $this->_name;
            }
        }
        
        $wkdStudy = new \Wkdtjdwns\WkdStudy\Student('WkdStudy');
        echo $wkdStudy->name() . "<br>";
        
        $phpStudy = new \Wkdtjdwns\PhpStudy\Student('PhpStudy');
        echo $phpStudy->name() . "<br>";
    ?>

    <hr>
    <h1>소스 코드</h1>

        namespace Wkdtjdwns\WkdStudy;<br><br>

        class Student<br>
        {<br>
            protected $_name;<br><br>
        
            public function __construct($name)<br>
            {<br>
                $this->_name = $name;<br>
            }<br><br>
        
            public function name()<br>
            {<br>
                return $this->_name;<br>
            }<br>
        }<br><br>
        
        namespace Wkdtjdwns\PhpStudy;<br><br>
        
        class Student<br>
        {<br>
            protected $_name;<br><br>
        
            public function __construct($name)<br>
            {<br>
                $this->_name = $name;<br>
            }<br><br>
        
            public function name()<br>
            {<br>
                return $this->_name;<br>
            }<br>
        }<br><br>
        
        $wkdStudy = new \Wkdtjdwns\WkdStudy\Student('WkdStudy');<br>
        echo $wkdStudy->name() . "&lt;br&gt;";<br><br>
        
        $phpStudy = new \Wkdtjdwns\PhpStudy\Student('PhpStudy');<br>
        echo $phpStudy->name() . "&lt;br&gt;";<br>
</body>
</html>
