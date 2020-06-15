<?php
include "./com/base.php";
// GET方式取得刪除的資料id
$id = $_GET['id'];

$sql="DELETE FROM `invoice` WHERE `invoice`.`id`='$id'";

$res=$pdo->exec($sql);

if($res==1){
    header("location:list.php");
}else{
    echo "刪除失敗<br>";
}
