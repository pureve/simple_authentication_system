<?php
session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <title>Hello, world!</title>
    <style>
      .navbar-nav > li{
        padding-left:30px;
        padding-right:30px;
      }

      #logout-button{
        padding-top: 10px;
        padding-left: 10px;
        text-align: right;
        font-size: 10px;
        text-decoration: underline;
      }
      .login-button, .login-button:visited, .login-button:hover, .login-button:active{
          font-size: 10px;
          border: 2px;
          margin-top:10px;
          margin-bottom: 10px;
          padding-left: 5px;
          padding-right: 5px;
          padding-top: 2px;
          padding-bottom: 2px;
          text-decoration: none;
          color: inherit;
          -webkit-appearance: button;
          -moz-appearance: button;
          appearance: button;
      }

      .login{
        text-align: center;
        padding: 20px;
      }
      #login_username_pwd{
        padding: 10px;
        margin-top: 10px;
      }
      #header_username{
        margin-top: 13px;
        font-size: 10px;
        text-align: center;
      }
      .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

    </style>

  </head>
  <body>



    <header>
      <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">表紙 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list_screen.php">画面詳細</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event_list.php">イベント一覧</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="field_set_item.php">項目セット明細</a>
          <li class="nav-item">
            <a class="nav-link" href="field_check_item.php">項目チェック明細</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="change_history.php">変更履歴</a>
          </li>


          <?php
          if(isset($_SESSION['userId'])){
            $username = $_SESSION['userUid'];
            echo'<div id="header_username">
              <p><b>としてログイン <i>'.$username.'</i></b></p>
            </div>
            <div id="logout-button">
            <form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">ログアウト(Logout)</button>
            </form>
            </div>
            ';

          }else {
             echo'<div >
               <a class="login-button" href="login.php"> ログインする(Login) </a>
             </div>';
          }
           ?>


        </ul>

      </nav>

    </header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
