<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/fa483230ea.js" crossorigin="anonymous"></script>

</head>
<?php
// 好像用不著session O.O
// include ".com/base.php";
$id = $_GET['id'];
// $sql = "SELECT * FROM `invoice` WHERE `invoice`.`id`=$id";


?>

<body>
    <!-- 基本就是輸入發票重抄一遍，以後再想辦法併回去 -->
    <?php include "./include/header.php"; ?>
    <div class="container mt-5 p-3 col-3 d-flex justify-content-center border rounded-lg shadow bg-dark alert-light">
        <form action="save_invoice.php" method="post">
            <!-- 修改時需把要修改的發票id帶過去 -->
            <div><input type="hidden" name="id" value="<?= $id; ?>"></div>
            <div class="input-group form-row mb-3 p-2">
                <label class="col-3" for="year"> 年份：</label>
                <select class="form-control col-9" name="year">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <div class="input-group form-row mb-3 p-2">
                <label class="col-3" for="period">期別：</label>
                <select class="form-control col-9" name="period">
                    <option value="1">1,2月</option>
                    <option value="2">3,4月</option>
                    <option value="3">5,6月</option>
                    <option value="4">7,8月</option>
                    <option value="5">9,10月</option>
                    <option value="6">11,12月</option>
                </select>
            </div>
            <div class="input-group mb-3 p-2 form-row">
                <label class="form-label col-3" for="number">獎號：</label>
                <!-- 規定輸入必須為2個大寫英文字母，自動轉為大寫 -->
                <input class="form-control col-2 text-uppercase" type="text" name="code" pattern="[a-zA-Z]{2}" placeholder="AA" maxlength="2">
                <input class="form-control col-7" type="text" name="number" pattern="\d{8}" placeholder="88888888" maxlength="8">
            </div>
            <div class="input-group mb-3 p-2 form-row">
                <label class="form-label col-3" for="expend">花費：</label>
                <input class="form-control col-9" type="text" name="expense" pattern="^[1-9]\d*$" maxlength="10">
            </div>
            <input class="btn btn-outline-info m-2" type="submit" value="儲存">
            <!-- <a class="btn btn-outline-info" href="list.php">發票列表</a>
            <a class="btn btn-outline-info" href="award.php">對獎</a> -->
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>