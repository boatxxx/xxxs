<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เมนูหลัก</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    max-width: 900px;
    margin: auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.header {
    background-color: #ff4d4d;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

.menu {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: space-around;
    margin: 20px 0;
}

.menu li {
    margin: 0 10px;
}

.menu a {
    text-decoration: none;
    color: #ff4d4d;
    font-size: 20px;
    font-weight: bold;
}

.menu a:hover {
    color: #333;
}

.content {
    margin: 20px 0;
}

.grade-selection {
    list-style-type: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.grade-selection li {
    margin: 10px 0;
}

.grade-selection a {
    text-decoration: none;
    color: #ff4d4d;
    font-size: 18px;
    padding: 10px;
    border: 2px solid #ff4d4d;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.grade-selection a:hover {
    background-color: #ff4d4d;
    color: #fff;
}

.report-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.report-table th, .report-table td {
    border: 1px solid #333;
    padding: 8px;
    text-align: center;
}

.report-table th {
    background-color: #ff4d4d;
    color: #fff;
}

@media (max-width: 600px) {
    .menu {
        flex-direction: column;
        align-items: center;
    }

    .grade-selection {
        flex-direction: column;
        align-items: center;
    }

    .report-table th, .report-table td {
        font-size: 14px;
        padding: 6px;
    }
}
.menu li {
    list-style-type: none;
    margin-bottom: 10px;
}

.menu li a {
    text-decoration: none;
    color: #333;
    display: block;
    padding: 5px;
}

.menu li a i {
    margin-right: 5px;
}
@media only screen and (max-width: 600px) {
    .container {
        width: 90%; /* ปรับขนาดความกว้างของคอนเทนเนอร์ */
        margin: 0 auto; /* จัดกึ่งกลาง */
    }

    .menu li {
        margin-bottom: 5px; /* ลดระยะห่างระหว่างรายการเมนู */
    }

    .menu li a {
        padding: 3px; /* ลดขนาดของ padding ของลิงก์ */
    }
}

/* สำหรับอุปกรณ์ที่มีขนาดใหญ่กว่า 600px */
@media only screen and (min-width: 601px) {
    .container {
        width: 80%; /* ปรับขนาดความกว้างของคอนเทนเนอร์ */
        margin: 0 auto; /* จัดกึ่งกลาง */
    }
}

        </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-...." crossorigin="anonymous">

<body>
    <div class="container">
        <header class="header">
            <h1>เมนูหลัก</h1>
        </header>
        <nav>
            <ul class="menu">
                <li><a href="{{ route('record') }}"><i class="fas fa-book"></i> ระบบบันทึกข้อมูล</a></li>
                <li><a href="{{ route('report') }}"><i class="fas fa-chart-bar"></i> ระบบสรุปรายงาน</a></li>
            </ul>

        </nav>
    </div>

</body>
</html>
