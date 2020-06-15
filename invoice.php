<?php include_once "./com/base.php";
$period = ceil(date("n") / 2);

$monthStr = [
    '1' => "1-2月",
    '2' => "3-4月",
    '3' => "5-6月",
    '4' => "7-8月",
    '5' => "9-10月",
    '6' => "11-12月",
];

if (isset($_GET['period'])) {
    $period = $_GET['period'];
}
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "./include/header.php"; ?>
    <div class="container">
        <h1>期別</h1>
        <ul class="nav">
            <li><a href="invoice.php?period=1" style="background:<?= ($period == 1) ? 'lightgreen' : 'white'; ?>">1(1-2)</a></li>
            <li><a href="invoice.php?period=2" style="background:<?= ($period == 2) ? 'lightgreen' : 'white'; ?>">2(3-4)</a></li>
            <li><a href="invoice.php?period=3" style="background:<?= ($period == 3) ? 'lightgreen' : 'white'; ?>">3(5-6)</a></li>
            <li><a href="invoice.php?period=4" style="background:<?= ($period == 4) ? 'lightgreen' : 'white'; ?>">4(7-8)</a></li>
            <li><a href="invoice.php?period=5" style="background:<?= ($period == 5) ? 'lightgreen' : 'white'; ?>">5(9-10)</a></li>
            <li><a href="invoice.php?period=6" style="background:<?= ($period == 6) ? 'lightgreen' : 'white'; ?>">6(11-12)</a></li>
        </ul>
        <a href="add_invoice.php"><button class="button button2">新增獎號</button></a>
        <?php

        $num1 = find('award_number', ['period' => $period, 'year' => $year, 'type' => 1]); //單筆
        $num2 = find('award_number', ['period' => $period, 'year' => $year, 'type' => 2]); //單筆
        $num3 = all('award_number', ['period' => $period, 'year' => $year, 'type' => 3]); //多筆
        $num4 = all('award_number', ['period' => $period, 'year' => $year, 'type' => 4]); //多筆

        ?>
        <table class="invoice-table">
            <tr>
                <th>年／月份</th>
                <th><?= $year; ?>年 <?= $monthStr[$period]; ?></th>
                <th>對獎</th>
            </tr>
            <tr>
                <td>特別獎</td>
                <td><?php
                    if (!empty($num1['number'])) {
                        echo $num1['number'];
                    };

                    ?><br>八位數號碼與上列號碼相同者獎金一千萬元</td>
                <td><a href="award.php?aw=1&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
            </tr>
            <tr>
                <td>特獎</td>
                <td><?php
                    if (!empty($num2['number'])) {
                        echo $num2['number'];
                    };

                    ?><br>八位數號碼與上列號碼相同者獎金二佰萬元</td>
                <td><a href="award.php?aw=2&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
            </tr>
            <tr>
                <td>頭獎</td>
                <td>
                    <?php
                    foreach ($num3 as $num) {
                        echo $num['number'] . "<br>";
                    }

                    ?>八位數號碼與上列號碼相同者獎金二十萬元

                </td>
                <td><a href="award.php?aw=3&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
            </tr>
            <tr>
                <td>二獎</td>
                <td>同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td>
                <td><a href="award.php?aw=4&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
            </tr>
            <tr>
                <td>三獎</td>
                <td>同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td>
                <td><a href="award.php?aw=5&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
            </tr>
            <tr>
                <td>四獎</td>
                <td>同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td>
                <td><a href="award.php?aw=6&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
            </tr>
            <tr>
                <td>五獎</td>
                <td>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td>
                <td><a href="award.php?aw=7&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
            </tr>
            <tr>
                <td>六獎</td>
                <td>期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td>
                <td><a href="award.php?aw=8&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
            </tr>
            <tr>
                <td>增開六獎</td>
                <td>
                    <?php
                    foreach ($num4 as $num) {
                        echo $num['number'] . "<br>";
                    }

                    ?>
                </td>
                <td><a href="award.php?aw=9&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a></td>
            </tr>
        </table>
    </div>
</body>

</html>