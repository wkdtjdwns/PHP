<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오늘의 날짜는?</title>
    <style>
        a {
            color: blue;
            text-decoration: none;
        }

        .table {
            width: 100%;
            justify-items: center;
            padding: 20px 0px;
        }

        .table_line {
            padding: 10px 20px;
            border-collapse: collapse;
        }

        .table_line th,
        td {
            border: 1px solid black;
        }

        .table_line td {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <table class="table_line">
        <tr>
            <div>
                <td><a href="./integer.php">1. 정수형(Integer)</a></td>
                <td><a href="./float.php">2. 실수형(Float)</a></td>
                <td><a href="./boolean.php">3. 논리형(Boolean)</a></td>
                <td><a href="./string.php">4. 문자열(String)</a></td>
            </div>
        </tr>
    </table>
</body>
</html>
