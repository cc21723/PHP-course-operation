<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
</head>
<body>
    <div class="container">
        <h1>網頁傳值練習</h1>
        <h2>登入檢查</h2>
        <p>建立一個可以輸入帳號和密碼的表單畫面</p>
        <p>輸入帳號密碼，按下"登入"按鈕後，在另一個頁面顯示帳號密碼是否正確。</p>

        <form action="check.php" method="post">
            <div>
                <label for="acc">帳號:</label>
                <input type="text" name="acc" required>
            </div>
            <div>
                <label for="pw">密碼:</label>
                <input type="password" name="pw" required>
            </div>
            <input type="submit" value="登入">
            <input type="reset" value="清空內容">
        </form>
    </div>
    
</body>
</html>