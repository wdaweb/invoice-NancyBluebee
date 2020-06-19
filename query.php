<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統：期數查詢發票</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/fa483230ea.js" crossorigin="anonymous"></script>

</head>
<body>
<?php include "./include/header.php"    ;?>  
<div class="container">  
<h2>請輸入發票期數：1-6期</h2>
<form action="query_output.php" method="get">
<input type="text" name="period">
<input type="submit" value="搜尋">
</form>
</div>
</body>
</html>