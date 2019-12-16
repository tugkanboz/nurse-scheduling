<!doctype html>
<!-- Everyone enter the system on this page.-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="../assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="../assets/css/dashboard.css" rel="stylesheet" />
    <script src="../assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="../assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="../assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="../assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="../assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="../assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <?php
      include('login.php');
        if (isset($_SESSION['login_user'])&& $_SESSION['personal_id']== 0) {
          
          header("location: admin-index.php");
        }
        elseif (isset($_SESSION['login_user'])&& $_SESSION['personal_id']== 1) {
          
          header("location: hospitaladministration-index.php");
        }
        elseif (isset($_SESSION['login_user'])&& ($_SESSION['personal_id']== 2 || $_SESSION['personal_id']== 3)) {
          
          header("location: nurse-info.php");
        }
        elseif (isset($_SESSION['login_user'])&& $_SESSION['personal_id']== 4) {
          
          header("location: headnurse-index.php");
        }
    ?>
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="./assets/brand/tabler.svg" class="h-6" alt="">
              </div>
              <form class="card" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="card-body p-6">
                  <div class="card-title">Login to your account</div>
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="username" class="form-control" name="exampleInputUsername1" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Password

                    </label>
                    <input type="password" class="form-control" name="exampleInputPassword1" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Remember me</span>
                    </label>
                  </div>
                  <div class="form-group">
                <div class="text-center">
                  <span class="error"><?php  echo $error; ?></span>
                </div>
              </div>
                  <div class="form-footer">
                    <button name ="submit"  type="submit" class="btn btn-primary btn-block">Sign in</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Don't have account yet? <a href="main-register.html">Sign up</a>
              </div>
              <div class="text-center text-muted">
                Forgot Password <a href="main-forgot-password.html">Reset Password</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>