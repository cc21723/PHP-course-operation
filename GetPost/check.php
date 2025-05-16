<?php

if($_POST['acc'] == 'admin' && $_POST['pw'] == '1234'){
    echo "登入成功";
    header("location=1;");
}else{
    echo "登入失敗";
    header("location=0;");
}

?>
<a href="../index.php">⬅ 返回首頁</a>