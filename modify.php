<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統：修改現有發票</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/fa483230ea.js" crossorigin="anonymous"></script>

</head>
<body>
<?php include "./include/header.php"    ;?>  
<div class="container">
<table>
<tr><th>編號</th><th>年份</th><th>期別</th><th>獎號</th><th>花費</th><th>操作</th></tr>
<?php include "./com/base.php";
//修改現有發票
foreach ($pdo->query('select * from invoice') as $row) {
	echo '<tr><form action="modify_output.php" method="post">';
	echo '<input type="hidden" name="id" value="', $row['id'], '">';
	echo '<td>', $row['id'], '</td>';
	echo '<td>';
	echo '<input type="text" name="year" value="', $row['year'], '">';
	echo '</td>';
	echo '<td>';
	echo '<input type="text" name="period" value="', $row['period'], '">';
    echo '</td>';
    echo '<td>';
    echo '<input type="text" name="price" value="', $row['code'], $row['number'],'">';
    echo '</td>';
    echo '<td>';
    echo '<input type="text" name="expend" value="', $row['expend'], '">';
    echo '</td>';
	echo '<td><input type="submit" value="確定修改"></td>';
	echo '</form></tr>';
	echo "\n";
}
?>
</table>
</div>
</body>
</html>