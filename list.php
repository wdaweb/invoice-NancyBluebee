<?php include_once "./com/base.php"    ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><i class="fas fa-file-invoice-dollar"></i>統一發票管理系統：發票列表<i class="fas fa-file-invoice-dollar"></i></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/fa483230ea.js" crossorigin="anonymous"></script>
    <style>
    h1 {
        color: white;
        text-shadow: 2px 2px 4px #000000;
    }
	                    
</style>
</head>
<body>
<?php include "./include/header.php"   ;
$period=ceil(date("n")/2);

if(isset($_GET['period'])){
    $period=$_GET['period'];
}

?>
<div class="container">
<h1>　　<i class="fas fa-award"></i>發票列表<i class="fas fa-award"></i></h1>
<ul class="nav">
<li><a href="list.php?period=1" style="background:<?=($period==1)?'lightgreen':'white';?>">1(1-2)</a></li>
<li><a href="list.php?period=2" style="background:<?=($period==2)?'lightgreen':'white';?>">2(3-4)</a></li>
<li><a href="list.php?period=3" style="background:<?=($period==3)?'lightgreen':'white';?>">3(5-6)</a></li>
<li><a href="list.php?period=4" style="background:<?=($period==4)?'lightgreen':'white';?>">4(7-8)</a></li>
<li><a href="list.php?period=5" style="background:<?=($period==5)?'lightgreen':'white';?>">5(9-10)</a></li>
<li><a href="list.php?period=6" style="background:<?=($period==6)?'lightgreen':'white';?>">6(11-12)</a></li>
</ul>
</div>
<?php

//$sql="select * from invoice where period='$period'";
$rows=all('invoice',['period'=>$period]);

?>
<div style="overflow-x:auto;">
<div class="container">
<table>
    <tr>
        <th width="10%">編　號</th>
        <th width="10%">標　記</th>
        <th width="20%">號　碼</th>
        <th width="20%">花　費</th>
        <th width="20%">修　正</th>
        <th width="20%">刪　除</th>

    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr>
        <td width="10%"><?=$row['id'];?></td>
        <td width="10%"><?=$row['code'];?></td>
        <td width="20%"><?=$row['number'];?></td>
        <td width="20%">$ <?=$english_format_number = number_format($row['expend']);?></td>
        <td width="20%"><a href="modify.php?id= <?= $row['id'] ?> " class="btn btn-primary btn-sm active" role="button" aria-pressed="true">修正發票資料</a>
        <td width="20%"><a href="delete.php?id= <?= $row['id']; ?> " class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">刪除號碼</a>
    </tr>
    <?php
    }
    ?>
</table>
</div>
</div>

</body>
</html>