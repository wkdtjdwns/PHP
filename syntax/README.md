# 1. PHP 기본 문법

- **PHP 태그의 사용 방법 4가지**
    
    ```php
    <?php 코드 ?>
    <? 코드 ?>
    <% 코드 %>
    <script language = "php"> 코드 </script>
    ```
    
- **PHP 코드의 기본 구조**
    
    ```php
    <?php // php 구문 시작
    
    class Grammer // 클래스 정의
    {
    	public $name = "Welcome PHP!" // "Welcome PHP!"를 변수 name에 할당
    	
    	public function phpStudy($year) // 메소드 정의
    	{
    		echo "변수 name은 {$this->name}입니다."<br/>;
    		echo "변수 year {$year}입니다."<br/>;
    		echo $this->name . $year ."<br/>"
    	}
    }
    
    $year = 2024;
    $grammer = new Grammer();
    $grammer->phpStudy($year);
    ?>
    ```
    
<br>

# 2. 주석

| **주석** | **단위** |
| --- | --- |
| **`// 내용`** | 한 줄 |
| **`# 내용`** | 한 줄 |
| **`/* 내용 */`** | 여러 줄, 부분 |
