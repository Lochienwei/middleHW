<!---左側選單欄--->
<div id="sidebar">
 <?php
 //利用session內的使用者帳號來取出使用者的資料
  if(!empty($_SESSION['user'])){
 //echo $_SESSION['user'];
 $sql="select * from user where acc='".$_SESSION['user']."'";
 $user=$pdo->query($sql)->fetch(); 
 //echo $user['permission'];  
 //將權限還原成為陣列
 $pr=unserialize($user['permission']);
// print_r($pr);

  }else{
    $pr=[1]; //預設的權限，未登入的人只能看到第一個選單的項目
  }

?> 
    <ul class="menu">

  <!--終極精簡三元運算子  in_array-->
    <?php
    echo (in_array(1,$pr))?"<li>關於我們</li>":"";
    echo (in_array(2,$pr))?"<li>最新消息</li>":"";
    echo (in_array(3,$pr))?"<li>活動資訊</li>":"";
    echo (in_array(4,$pr))?"<li>產品訂購</li>":"";
    echo (in_array(5,$pr))?"<li>歷年產品銷售狀況</li>":"";
    echo (in_array(6,$pr))?"<li>業務部銷售狀況</li>":"";

    ?>




<!-- 土法煉鋼版   -->
  
  <!--  <?php
    for($i=0;$i<count($pr);$i++){
      if($pr[$i] =='1'){
      
    ?> 
      <li>關於我們</li>
    <?php
    }}
    ?>
 <?php 
    for($i=0;$i<count($pr);$i++){
      if($pr[$i] =='2'){
    ?> 
      <li>最新消息</li>
   <?php
    }}
    ?>
 <?php  for($i=0;$i<count($pr);$i++){
      if($pr[$i] =='3'){
      
    ?> 
      <li>活動資訊</li>
      <?php
    }}
    ?>
<?php  for($i=0;$i<count($pr);$i++){
      if($pr[$i] =='4'){
      
    ?> 
      <li>產品訂購</li>
      <?php
    }}
    ?>
<?php  for($i=0;$i<count($pr);$i++){
      if($pr[$i] =='5'){
      
    ?> 
      <li>留言板</li>
      <?php
    }}
    ?>
<?php  for($i=0;$i<count($pr);$i++){
      if($pr[$i] =='6'){
      
    ?> 
      <li>生活留影</li>
      <?php
    }}
    ?>  -->

    </ul>
  </div>