<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統：依期數查詢發票</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/fa483230ea.js" crossorigin="anonymous"></script>

</head>
<body>
<?php include "./include/header.php"    ;?>  
<div class="container">
<table>
<tr><th>年份</th><th>期別</th><th>獎號</th><th>花費</th></tr>
<?php include "./com/base.php";
//取得輸入期別
$period = $_GET['period'];
$sql=$pdo->prepare("select * from `invoice` WHERE `invoice`.`period`='$period'");
//$sql="select * from `invoice` WHERE `invoice`.`period`='$period'";
$sql->execute([$_REQUEST['period']]);
foreach ($sql->fetchAll() as $row) {
	echo '<tr>';
	echo '<td>', $row['year'], '</td>';
	echo '<td>', $row['period'], '</td>';
	echo '<td>', $row['code'], $row['number'],'</td>';
	echo '<td>', $row['expend'], '</td>';
	echo '</tr>';
	echo "\n";
}
?>
</table>
</div>
</body>
</html>