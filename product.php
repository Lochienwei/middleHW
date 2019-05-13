<?php
include_once "base.php";

 //建立新增產品
 //update($array)
   
 //送出新增語法
 /* $res=$pdo->query($sql);
   if($res){
     echo "新增成功";
   }else{
     echo "新增異常";
   } */
?>

<style>
table{
    border-collapse:collapse;

}
td{
    border:1px solid #ccc;
    padding:3px;
}

</style>
<form action="index.php?do=product" method="post">
  <input type="submit" name="addpds" value="新增">
  <input type="submit" name="deletpds" value="刪除">
  <input type="submit" name="changpds" value="修改">
</form>
<table>
    <tr>
        <td>產品名稱</td>
        <td>產品代號</td>
        <td>單價</td>
        <td>成本</td>
    </tr>

<?php

//取出所有的產品

$products=all("product");

//利用迴圈來取出所有的產品
foreach ($products as $key => $pds) {
?>
   <tr>
        <td><?=$pds[0];?></td>
        <td><?=$pds[1];?></td>
        <td><?=$pds[2];?></td>
        <td><?=$pds[3];?></td>
    </tr>
    
<?php
}
?>
</table>
