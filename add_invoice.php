<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增開獎獎號</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include "./include/header.php";?>
<div class="container">
<h1>新增開獎獎號</h1>
<form action="save_number.php" method="post">
<table class="invoice-table">
    <tr>
        <td>年／月份</td>
        <td>
            <input type="number" name="year" id="">
            <select name="period">
                <option value="1">1-2月</option>
                <option value="2">3-4月</option>
                <option value="3">5-6月</option>
                <option value="4">7-8月</option>
                <option value="5">9-10月</option>
                <option value="6">11-12月</option>

            </select>
            
        </td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td><input type="number" name="num1"></td>
    </tr>
    <tr>
        <td>特獎</td>
        <td><input type="number" name="num2"></td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
        </td>
    </tr>
    <tr>
        <td>二獎</td>
        <td></td>
    </tr>
    <tr>
        <td>三獎</td>
        <td></td>
    </tr>
    <tr>
        <td>四獎</td>
        <td></td>
    </tr>
    <tr>
        <td>五獎</td>
        <td></td>
    </tr>
    <tr>
        <td>六獎</td>
        <td></td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td>
            <input type="number" name="num4[]"><br>
            <input type="number" name="num4[]">
        </td>
    </tr>
</table>
<hr>
<p>
1.領獎期間自109年4月6日起至109年7月6日止，中獎人請於領獎期間攜帶國民身分證(非本國國籍人士得以護照、居留證或內政部移民署核發入出境許可證等替代)及中獎統一發票，依代發獎金單位公告之兌獎營業時間臨櫃兌領，逾期不得領獎。<br />
2.統一發票未依規定載明金額者，不得領獎。<br />
3.統一發票買受人為政府機關、公營事業、公立學校、部隊及營業人者，不得領獎。<br />
4.中三獎(含)以上者，依規定應由發獎單位扣繳20﹪所得稅款。<br />
5.中五獎(含)以上者，依規定應繳納0.4%印花稅款。<br />
6.中獎之統一發票，每張按其最高中獎獎別限領1個獎金。<br />
7.詳細領獎規定，請查閱「統一發票給獎辦法」。若有疑義，請洽財金公司客服專線：4128282(手機請撥：02-4128282)，或至財金公司網站查詢。<br />
8.財政部統一發票兌獎APP下載點：</p>
<hr>
<input type="submit" value="送出">

</form>
</div>
</body>
</html>