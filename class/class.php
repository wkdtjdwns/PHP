<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>클래스</title>
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
                <td><a href="./extend.php">1. 상속</a></td>
                <td><a href="./member_field.php">2. 멤버변수</a></td>
                <td><a href="./access_modifier.php">3. 접근 제어자</a></td>
            </div>
        </tr>
    </table>
</body>
</html>
