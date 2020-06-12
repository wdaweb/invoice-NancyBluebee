<?php include_once "./com/base.php"    ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統：發票列表</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
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
<h1>發票列表</h1>
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
        <th width="20%">編　號</th>
        <th width="20%">標　記</th>
        <th width="30%">號　碼</th>
        <th width="30%">花　費</th>
    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr>
        <td width="20%"><?=$row['id'];?></td>
        <td width="20%"><?=$row['code'];?></td>
        <td width="30%"><?=$row['number'];?></td>
        <td width="30%">$ <?=$english_format_number = number_format($row['expend']);?></td>
    </tr>
    <?php
    }
    ?>
</table>
</div>
</div>

</body>
</html>