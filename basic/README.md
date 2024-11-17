# 1. PHP의 정의

- **PHP(Personal Home-Page Tools; Professional Hypertext Preprocessor):
동적인 페이지를 생성하기 위한 서버 사이드 스크립트 언어**
- **C 언어를 기반으로 만들어짐.**
- **C 언어와 비슷한 구조의 코드가 약간 포함된 HTML 페이지의 형태임.**
    
    **→ HTML 안에 C 언어가 포함되어 있는 형태**
    

```php
// html 파일 안에 php 코드를 삽입하는 방법
<?php
	코드;
	코드;
	코드;
?>
```

<br>

# 2. PHP 예제

```php
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오늘의 날짜는?</title>
</head>
<body>
    <!-- php 구문 -->
    <?php
        // 변수 생성: $변수명 = 값;
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        $today = date('Y-m-d');
    ?>

    <!-- html 구문 -->
    일반적인 HTML 페이지의 형태입니다.<br>

    <!-- php의 변수를 html에 불러오는 방법 4가지 -->
    올해는 <?php echo $year ?>년 입니다.<br>
    지금는 <? echo $month ?>월 입니다.<br>
    오늘은 <?= $day ?>일 입니다.<br>
    오늘 날짜는 <script language="php"> echo $today; </script>입니다.<br>
</body>
</html>
```

![image](https://github.com/user-attachments/assets/87da0592-9ca1-44da-8905-12a938d15a13)
