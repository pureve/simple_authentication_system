<?php require "header_new.php" ?>

<main>
  <div class="login">
      <h1>サインアップ</h1><br>
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo '<div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
          <strong>エラー!</strong>
          空のフィールド！
          </div><br>';
        }
        elseif ($_GET['error'] == "invalidmailuid") {
          echo '<div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
          <strong>エラー!</strong>
          メールアドレスとユーザー名が無効です！ ユーザー名には有効な文字を使用してください。
          </div><br>';
        }
        elseif ($_GET['error'] == "invaliduid") {
          echo '<div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
          <strong>エラー!</strong>
          無効なユーザー名！ ユーザー名に有効な文字を使用してください（a-z A-Z 0-9）。
          </div><br>';
        }
        elseif ($_GET['error'] == "invalidmail") {
          echo '
          <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
          <strong>エラー!</strong>
          無効なメールアドレス！
          </div><br>';
        }
        elseif ($_GET['error'] == "passwordcheck") {
          echo '
          <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
          <strong>エラー!</strong>
          パスワードが一致しません！
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
      <form class="" action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="ユーザー名"> <br><br>
        <input type="text" name="mail" placeholder="Eメール"> <br><br>
        <input type="password" name="pwd" placeholder="パスワード"><br><br>
        <input type="password" name="pwd-repeat" placeholder="パスワードを再度入力してください"><br><br>
        <button type="submit" name="signup-submit">サインアップ</button>
      </form>

  </div>
</main>

<?php
  require "footer.php";
?>
