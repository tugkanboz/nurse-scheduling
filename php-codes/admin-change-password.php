<?php
include('session.php');
if ($db->connect_errno > 0) {
  die('Unable to connect to database [' . $db->connect_error . ']');
}
$result = $db->query("select * from personal where username='$_SESSION[login_user]'");
while ($row = $result->fetch_assoc()) {
  $name         = $row['name'];
  $surname      = $row['surname'];
  $username     = $row['username'];
  $user_id      = $row['user_id'];
  $personal_id  = $row['personal_id'];
  $email        = $row['email'];
}
$result->free();
if ($personal_id == 0){
    $usertype = "Admin";
}
if(isset($_POST['Submit']))
  {
  $oldpass=md5($_POST['oldpassword1']);
  $username=$_SESSION['login'];
  $newpassword=md5($_POST['newpassword1']);
  $sql=mysqli_query($con,"SELECT password FROM personal where password='$oldpass' && username='$username'");
  $num=mysqli_fetch_array($sql);
  if($num>0)
  {
  $con=mysqli_query($con,"update personal set password=' $newpassword' where username='$username'");
  $_SESSION['msg1']="Password Changed Successfully !!";
  }
  else
  {
  $_SESSION['msg1']="Old Password not match !!";
  }
  }
?>
<!doctype html>
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
  <title>Home page - Nurse Scheduling System</title>
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
<div class="page">
  <div class="page-main">
    <div class="header py-4">
      <div class="container">
        <div class="d-flex">
          <a class="header-brand" href="./admin-index.html">
            <img src="../images/logo.jpeg" class="header-brand-img" alt="tabler logo">
          </a>
          <div class="d-flex order-lg-2 ml-auto">


            <div class="dropdown">
              <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">

                    <span class="ml-2 d-none d-lg-block">
                    <a href="logout.php"><span class="text-default"><?php echo $name . " " . $surname ?></span> </a>
                    <small class="text-muted d-block mt-1"><?php echo $usertype  ?></small>
                    </span>
              </a>
            </div>
          </div>
          <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
            <span class="header-toggler-icon"></span>
          </a>
        </div>
      </div>
    </div>

    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-lg order-lg-first">
            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
              <li class="nav-item">
                <a href="admin-index.html" class="nav-link "><i class="fe fe-home"></i> Home</a>
              </li>
              <li class="nav-item">
                <a href="admin-create-account.html" class="nav-link " data-toggle="dropdown"><i class="fe fe-box"></i> Create New Account</a>
              </li>

              <li class="nav-item">
                <a href="admin-delete-account.html" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Delete Account</a>
              </li>

              <li class="nav-item">
                <a href="admin-change-password.html" class="nav-link active" data-toggle="dropdown"><i class="fe fe-box"></i> Change Password</a>
              </li>

            </ul>
          </div>

        </div>
      </div>
    </div>
    <div class="my-2 my-md-5">
      <div class="container">
        <div class="row">
          <div class="col col-login mx-auto">
            <div class="text-center mb-6">
              <img src="./assets/brand/tabler.svg" class="h-6" alt="">
            </div>
            <form class="card" action="" method="post" onSubmit="return valid();">
              <div class="card-body p-6">
                <div class="card-title">Change password</div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputEmail1">Username</label>
                  <input type="username" class="form-control" id="exampleInputUsername2" aria-describedby="emailHelp" placeholder="Enter Username">

                  <label class="form-label" for="exampleInputEmail1">Old password</label>
                  <input type="password" class="form-control" id="oldpassword1" placeholder="Enter Old Password">

                  <label class="form-label" for="exampleInputEmail1">New password</label>
                  <input type="password" class="form-control" id="newpassword1" placeholder="Enter New Password">
                </div>
                <div class="form-footer">
                <td><a href="main-login.php">Back to login Page </a></td>
                  <button type="submit" name ="Submit" class="btn btn-primary btn-block">Change password</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-auto ml-lg-auto">
          <div class="row align-items-center">
            <div class="col-auto">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item"><a href="./documentation.html" target="_blank">Documentation</a></li>
                <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
          Copyright © 2019 <a href="https://capstone.eng.bau.edu.tr/db-active-4999.php?showDepartment=any&showCode=333" target="_blank">Capstone BAU</a>. All rights reserved.
        </div>
      </div>
    </div>
  </footer>
</div>
</body>
</html>