<?php
  require "header_new.php";
 ?>

 <main>

   <div class="login">
     <h1>ログインする</h1><br><br>
     <?php
     if (isset($_GET['error'])) {
       if ($_GET['error'] == "emptyfields") {
         echo '<div class="alert">
         <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
         <strong>エラー!</strong>
         空のフィールド!
         </div><br>';
       }
       elseif ($_GET['error'] == "sqlerror") {
         echo '<div class="alert">
         <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
         <strong>エラー!</strong>
         データベース接続エラー。
         </div><br>';
       }
       elseif ($_GET['error'] == "wrongpwd") {
         echo '<div class="alert">
         <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
         <strong>エラー!</strong>
         間違ったパスワードまたはユーザー名。
         </div><br>';
       }
       elseif ($_GET['error'] == "uid") {
         echo '<div class="alert">
         <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
         <strong>エラー!</strong>
         ユーザーが見つかりません
         </div><br>';
       }
       else{
         echo '
         <div class="alert">
         <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
         <strong>エラー!</strong>
         何かが間違っていました。もう一度やり直してください!
         </div><br>';
       }
     }
      ?>
     <form action="includes/login.inc.php" class="Login" method="post">
       <div class="login_username_pwd">
          <input type = "text" name = "mailuid" placeholder="ユーザー名"value = "" maxlength = "100" /><br><br>
       </div>
       <div class="login_username_pwd">
          <input type = "password" name = "pwd" placeholder="パスワード" value = "" maxlength = "100" /><br><br>
       </div>


       <button type="submit" name="login-submit">ログインする</button>
     </form>
     <a class="Login" id="SignupAnchor" href="signup.php">サインアップ</a>
   </div>
 </main>

<?php
  require "footer.php";
?>
