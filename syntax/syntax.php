<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>기본 문법</title>
</head>
<body>
    <?php // php 구문 시작

        class Grammer // 클래스 정의
        {
            public $name = "Welcome PHP!"; // "Welcome PHP!"를 변수 name에 할당
            
            public function phpStudy($year) // 메소드 정의
            {
                echo "변수 name은 {$this->name}입니다.<br/>";
                echo "변수 year {$year}입니다.<br/>";
                echo $this->name . $year ."<br/>";
            }
        }

        $year = 2024;
        $grammer = new Grammer();
        $grammer->phpStudy($year);
    ?>
</body>
</html>
