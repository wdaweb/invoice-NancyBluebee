<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認發票輸入成功</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./include/header.php"    ;?>
<div class="container">
<?php
include "./com/base.php";

/* $sql="insert into invoice (
    `period`,
    `year`,
    `code`,
    `number`,
    `expend`) values(
    '".$_POST['period']."',
    '".$_POST['year']."',
    '".$_POST['code']."',
    '".$_POST['number']."',
    '".$_POST['expend']."')";
    echo $sql;
    $res=$pdo->exec($sql); */

    $data=[
        'period'=>$_POST['period'],
        'year'=>$_POST['year'],
        'code'=>$_POST['code'],
        'number'=>$_POST['number'],
        'expend'=>$_POST['expend'],
    ];
    //顯示所輸入的號碼//
   
    echo "確認剛剛輸入的發票資料：";
    echo "英文前兩碼", $_POST['code'];
    echo "數字八碼=", $_POST['number'], "<br>";

    $res=save("invoice",$data);
    if($res==1){
        echo "新增成功<br>";
        echo "<a href='index.php'>繼續輸入</a><br>";

        echo "<a href='list.php'>發票列表</a>";
    }else{
        echo "新增失敗";

    }


?>
</div>
</body>
</html>