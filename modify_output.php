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
<?php include "./com/base.php";

//確認修改資料成功
$sql=$pdo->prepare('update invoice set year=?, code=?, number=?, period=?, expend=? where id=?');
if (empty($_REQUEST['number'])) {
	echo '請輸入發票號碼。';
} else
if (!preg_match('/[0-9]+/', $_REQUEST['expend'])) {
	echo '請以整數輸入花費。';
} else
if ($sql->execute(
	[htmlspecialchars($_REQUEST['year']), 
	$_REQUEST['code'], $_REQUEST['number']]
)) {
	echo '修改成功。';
} else {
	echo '修改失敗。';
}
?>
</div>
</body>
</html>