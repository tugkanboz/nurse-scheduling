<?php
    session_start();
    include('db_conn.php');
    //include('admin-index.php');
    $error='';
    if (isset($_POST['submit'])) {
        if (empty($_POST['exampleInputUsername1']) || empty($_POST['exampleInputPassword1'])) {
        $error = "Username or Password is required";
        }
        else{
        $username=$_POST['exampleInputUsername1'];
        $password=md5($_POST['exampleInputPassword1']);
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);
        $query = $mysqli->query("select * from personal where password='$password' AND username='$username'");
        $rows = mysqli_num_rows($query);

        while($row = $query->fetch_assoc()){
            $first_name     = $row['name'];
            $last_name  = $row['surname'];
            $personal_id = $row['personal_id'];
            $_SESSION['personal_id']= $personal_id;

        }
        if ($rows == 1 && $personal_id == 0) {
            $_SESSION['login_user']=$username;
            header("location: admin-index.php ");
        }
        elseif ($rows == 1 && $personal_id == 1 ) {
          $_SESSION['login_user']=$username;
          header("location: hospitaladministration-index.php");
        }
        elseif ($rows == 1 && ($personal_id == 2 || $personal_id == 3)) {
          $_SESSION['login_user']=$username;
          header("location: nurse-info.php");
        }
        elseif ($rows == 1 && $personal_id == 4 ) {
          $_SESSION['login_user']=$username;
          header("location: headnurse-index.php");
        }
        else {
            $error = "Username or Password is invalid";
        }
            mysqli_free_result($query);
            $mysqli->close();
        }
    }
    ?>