<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/fa483230ea.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include "./include/header.php"    ;?>
<div class="container" >
<h1>　<i class="fas fa-award"></i>統一發票對獎系統<i class="fas fa-award">　</i></h1>
<form action="save_invoice.php" method="post">
<fieldset>
<legend>輸入發票資料</legend>
<label for="year">年份:</label>
    <select name="year">
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
    </select><br />
    <label for="period">期別:</label>
    <select name="period" >
        <option value="1">1、2月</option>
        <option value="2">3、4月</option>
        <option value="3" selected="selected">5、6月</option>
        <option value="4">7、8月</option>
        <option value="5">9、10月</option>
        <option value="6">11、12月</option>
    </select><br />
   
    <label for="number">獎號:</label>
    <input type="text" name="code"  maxlength="2" size="2">
    <input type="text" name="number" maxlength="8" size="8"><br />

    <label for="expend">花費:</label>
    <input type="number" name="expend">
    <input type="submit" value="儲存"><br />
 </fieldset>   
</form>
<div style="text-align: left;">
<p>
✅財政部自108年1月1日起，提供民眾兌換統一發票據點，擴大至四大超商(7-11、全家、萊爾富及OK)、美聯社、全聯社等連鎖商店，以及一銀、彰銀、全國農業金庫、農漁會、指定信用合作社等金融機構為實體通路兌獎據點，發票兌獎據點增至1萬餘處，但郵局則退出，不再提供兌獎服務。<br />
✅統一發票中大獎先別高興太早，實際領到的錢和想像中是不一樣的，例如中了一千萬實領不到8佰萬的QQ<br />
✅108年12月1日起統一發票免稅門檻自2,000元提高至新台幣5,000元<br />
✅若用雲端發票自動滙款免印花稅<br />
✅行政院拍板廢止印花稅，還需要立法院通過，民眾想要享受這種小確幸還要再等等。</p>

</div>

<table class="moneytb">
<tbody>
<tr>
<th>獎別</th>
<th>中獎號碼</th>
<th>中獎金額</th>
<th>印花稅<br />
（千分之四）</th>
<th>所得稅<br />
（百分之二十）</th>
<th>實領金額</th>
</tr>
<tr class="one">
<td>特別獎</td>
<td>同期8位數號碼與特別獎號碼相同者</td>
<td>1,000萬元</td>
<td>4 萬元</td>
<td>200萬元</td>
<td class="money">796萬元</td>
</tr>
<tr>
<td>特獎</td>
<td>同期8位數號碼與特獎號碼相同者</td>
<td>200萬元</td>
<td>8,000元</td>
<td>40萬元</td>
<td class="money">159萬2千元</td>
</tr>
<tr class="one">
<td>頭獎</td>
<td>同期8位數號碼與頭獎號碼相同者</td>
<td>20萬元</td>
<td>800元</td>
<td>4萬元</td>
<td class="money">15萬9200元</td>
</tr>
<tr>
<td>二獎</td>
<td>同期末7 位數號碼與頭獎中獎號碼末7 位相同者各得</td>
<td>4萬元</td>
<td>160元</td>
<td>8千元</td>
<td class="money">3萬1840元</td>
</tr>
<tr class="one">
<td>三獎</td>
<td>同期末6 位數號碼與頭獎中獎號碼末6 位相同者各得</td>
<td>1萬元</td>
<td>40元</td>
<td>2千元</td>
<td class="money">7,960元</td>
</tr>
<tr>
<td>四獎</td>
<td>同期末5 位數號碼與頭獎中獎號碼末5 位相同者各得</td>
<td>4千元</td>
<td>16元</td>
<td>0百元</td>
<td class="money">3,984元</td>
</tr>
<tr class="one">
<td>五獎</td>
<td>同期末4 位數號碼與頭獎中獎號碼末4 位相同者各得</td>
<td>1千元</td>
<td>4元</td>
<td>0元</td>
<td class="money">996元</td>
</tr>
<tr>
<td>六獎</td>
<td>同期末3 位數號碼與頭獎中獎號碼末3 位相同者各得</td>
<td>2百元</td>
<td>0元</td>
<td>0元</td>
<td class="money">200元</td>
</tr>
</tbody>
</table>
<hr>
<p><a href="https://bluezz.com.tw/0102.php" target=_blank title="參考設計">發票系統設計功能參考</a></p>
<p><a href="https://fontawesome.com" target=_blank title="在FontAwesome ">FontAwesome 免費的Font ICON圖示</a></p>
</div>

</body>
</html>