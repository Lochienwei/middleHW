<div id="nav">
      <ul class="nav">
        <li><a href="index.php?do=login">登入</a></li>
        <li><a href="index.php?do=reg">註冊會員</a></li>
        <li>徵才訊息</li>
        
        <?php
          if(!empty($_SESSION['login'])){
            echo " <li><a href='logout.php'>登出</a></li>";
            
          }

        ?>
       <!-- <li> <a href='logout.php'>未進登出</a></li>; -->
       <?php
          if(!empty($_SESSION['login']) && $_SESSION['user']=='admin'){
            echo " <li><a href='index.php?do=product'>產品管理</a></li>";
            echo " <li><a href='index.php?do=admin'>員工管理</a></li>";
            echo " <li><a href='index.php?do=admin'>客戶管理</a></li>";






          }
          

        ?>
      </ul>
    </div>