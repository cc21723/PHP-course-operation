<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生管理系統</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(to bottom right, #fef6f9, #e3f4f3);
            color: #5c4b51;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #e6c1d3;
            padding: 1rem;
            text-align: center;
            border-bottom: 4px dashed #a87b9b;
        }

        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            background-color: #f2d7e6;
        }

        nav li {
            margin: 0 1rem;
        }

        nav a {
            text-decoration: none;
            color: #7b4f63;
            font-weight: bold;
            padding: 0.5rem;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #fff0f7;
            border-radius: 10px;
        }

        main {
            padding: 2rem;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.7);
            margin: 2rem;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(174, 134, 152, 0.2);
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #e6c1d3;
            border-top: 4px dashed #a87b9b;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
<header>
    <h1>🌸 學生管理系統 🌿</h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">首頁</a></li>
        <li><a href="student_list.php">學生列表</a></li>
        <li><a href="student_add.php">新增學生</a></li>
        <li><a href="about.php">關於</a></li>
    </ul>
</nav>
<main>
    <h2>歡迎來到學生管理系統</h2>
    <p>請從上方選單選擇功能</p>
</main>
<footer>
    <p>&copy; <?php echo date('Y')?> 學生管理系統</p>
</footer>
</body>
</html>
