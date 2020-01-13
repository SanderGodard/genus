<?php
  session_start();

  $loggedIn = false;
  function testCred($email, $password) {
    $emailCheck = false;
    $passwordCheck = false;
    // see if email exists
    // compare password to one found under email
    $realemail = "sander@godard.no";
    if ($email == $realemail) {
      $emailCheck = true;
      // echo "email";
    }
    $realpass = "sander123"; //sql query
    // $realpass = password_hash($realpass, PASSWORD_BCRYPT, ["doesthiswork?", 10]);
    if ($password == $realpass) {
      // echo password_hash("sander123", PASSWORD_BCRYPT);
      $passwordCheck = true;
      // echo "pass";
    }
    if ($emailCheck && $passwordCheck) {
      // echo "test-pos";
      return true;
    }
  }


  function loginCheck() {
    if (isset($_POST["login"])) {
      if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        // $password = password_hash($password, PASSWORD_BCRYPT, ["doesthiswork?", 10]);
        if (testCred($email, $password)) {
          // Set creds i session var
          $_SESSION["email"] = $email;
          $_SESSION["password"] = $password;
          $loggedIn = true;
          // Putt den over i session
          return true;
        } else {
          return false;
        }
      } else {
        return false;
      }


    // } else if ($LoggedIn == false) {
    //   return false;
    } else {

      if (isset($_SESSION["email"]) && isset($_SESSION["password"])) {
        $email = $_SESSION["email"];
        $password = $_SESSION["password"];

        if (testCred($email, $password)) {
          return true;
        } else {
          return false;
        }
      } else {
        return false;
      }

    }
  }
  if (loginCheck()) {
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
    $loggedIn = true;
    if ($page == "Log in") {
      header('Location: ' . '/genus/');
      die();
      exit();
    }
  }
  if ($page == "Log in" || $page == "Logged out") {
    // Logging out
  	$_SESSION["email"] = "";
  	$_SESSION["password"] = "";
  	$email = "";
  	$password = "";
  	$loggedIn = false;
    if (testCred($email, $password) == false) {
      $loginFail = true;
    }
    if (isset($_POST["email"]) == false) {
      $loginFail = false;
    }
  } elseif (loginCheck() == false) {
    $_SESSION["email"] = "";
    $_SESSION["password"] = "";
    echo "<div id='crederror' style='display: none;'></div>";
    $loggedIn = false;
    // $loginFail = true;
    header('Location: ' . '/genus/login/');
    die();
    exit();
  }
  // print_r($_SESSION);
?>
