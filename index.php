<?php

  require_once("config/connection.php");

  if (isset($_POST["send"]) and $_POST["send"]=="1") {
    require_once("models/User.php");
    $user = new User();
    $user->login();
  }

?>

<!DOCTYPE html>
<html>

<head lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>HelpDesk App - Login</title>

  <link href="public/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
  <link href="public/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
  <link href="public/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
  <link href="public/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
  <link href="public/img/favicon.png" rel="icon" type="image/png">
  <link href="public/img/favicon.ico" rel="shortcut icon">
  <link rel="stylesheet" href="public/css/separate/pages/login.min.css">
  <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/main.css">
</head>

<body>

  <div class="page-center">
    <div class="page-center-in">
      <div class="container-fluid">
        <form class="sign-box" action="" method="post" id="formLogin">
          <input type="hidden" id="idRol" name="idRol" value="1">
          <div class="sign-avatar">
            <img src="public/img/avatar-sign.png" alt="">
          </div>
          <header class="sign-title" id="titleLogin">Sign In</header>

          <?php
            if (isset($_GET["m"])) {
              switch ($_GET["m"]) {
                case '1':
                  ?>
                    <div class="alert alert-danger" role="alert">
                      <button class="close" type="button" data-dismiss="alert" arial-label="Close">
                        <span aria-hidden="true"></span>
                      </button>
                      <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                        <span>Incorrect user or password.</span>
                      </div>
                    </div>
                  <?php
                  break;
                case '2':
                  ?>
                    <div class="alert alert-danger" role="alert">
                      <button class="close" type="button" data-dismiss="alert" arial-label="Close">
                        <span aria-hidden="true"></span>
                      </button>
                      <div class="d-flex align-items-center justify-content-start">
                        <i class="icon ion ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                        <span>The fields is empty!</span>
                      </div>
                    </div>
                  <?php
                  break;
              }
            }
          ?>

          <div class="form-group">
            <input type="text" id="email" name="email" class="form-control" placeholder="E-Mail or Phone" />
          </div>
          <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
          </div>
          <div class="form-group">
            <div class="float-right reset">
              <a href="reset-password.html">Reset Password</a>
            </div>
            <div class="float-left reset">
              <a href="#" id="btnAccessAdmin">Access Admin</a>
            </div>
          </div>
          <button type="submit" class="btn btn-rounded">Sign in</button>
          <input type="hidden" name="send" value="1"/>
        </form>
      </div>
    </div>
  </div>
  <script src="public/js/lib/jquery/jquery.min.js"></script>
  <script src="public/js/lib/tether/tether.min.js"></script>
  <script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
  <script src="public/js/plugins.js"></script>
  <script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
  <script>
    $(function() {
      $('.page-center').matchHeight({
        target: $('html')
      });

      $(window).resize(function() {
        setTimeout(function() {
          $('.page-center').matchHeight({
            remove: true
          });
          $('.page-center').matchHeight({
            target: $('html')
          });
        }, 100);
      });
    });
  </script>
  <script src="public/js/app.js"></script>
  <script src="./index.js"></script>
</body>

</html>