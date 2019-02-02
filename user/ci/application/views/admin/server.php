<?php
//session_start();
//
$dbusername = "root";
$dbpassword = "12345";
$dbhostname = "104.155.216.50:3306";
$dbname = "laoniangdb";

//connection to the database
$db = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname)
or die("Unable to connect to MySQL");

//echo "Connected to MySQL<br>";

// REGISTER USER
$errors = array();

if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $admin_username = mysqli_real_escape_string($db, $_POST['admin_username']);
    $admin_email = mysqli_real_escape_string($db, $_POST['admin_email']);
    $admin_password_1 = mysqli_real_escape_string($db, $_POST['admin_inputpassword']);
    $admin_password_2 = mysqli_real_escape_string($db, $_POST['admin_confirmpassword']);

    // form validation: ensure that the form is correctly filled ...
    if ($admin_password_1 != $admin_password_2) {
        array_push($errors, "The two passwords do not match");
//        echo "does not match";
        header('location: register.php?errorpassw=1');
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM admin WHERE admin_name='$admin_username' OR admin_email='$admin_email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
//
    if ($user) { // if user exists
        if ($user['admin_email'] === $admin_email) {
            array_push($errors, "Admin email already exists");
//            echo "email exists";
            header('location: register.php?erroremail=1');
        }

        if ($user['admin_name'] === $admin_username) {
            array_push($errors, "Admin username already exists");
//            echo "username exists";
            header('location: register.php?errorusern=1');
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $admin_password = md5($admin_password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO admin (admin_email, admin_name, admin_password)
  			  VALUES('$admin_email', '$admin_username', '$admin_password')";
        mysqli_query($db, $query);
        $_SESSION['admin_username'] = $admin_username;
        $_SESSION['success'] = "You are now logged in";
        header('location: login.php');
    }
}


    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $admin_username = mysqli_real_escape_string($db, $_POST['admin_username']);
        $admin_inputpassword = mysqli_real_escape_string($db, $_POST['admin_inputpassword']);

        if (empty($admin_username)) {
            array_push($errors, "Username is required");
            echo "enter username";
        }
        if (empty($admin_inputpassword)) {
            array_push($errors, "Password is required");
            echo "enter password";
        }

        if (count($errors) == 0) {
            $password = md5($admin_inputpassword);
            $query = "SELECT * FROM admin WHERE admin_name='$admin_username' AND admin_password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['admin_name'] = $admin_username;
                $_SESSION['success'] = "You are now logged in";
                header('location: dashboard.html');
            }else {
                array_push($errors, "Wrong username/password combination");
//                echo "no admin existed";
                header('location: login.php?error=1');
            }
        }
    }

?>



