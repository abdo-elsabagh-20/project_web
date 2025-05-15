<?php

include "connection.php";

session_start();

$message = "";


if (!$link) {
  die("Error Connecting With Data Base.");
}

// Sign In
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['signin_email'])) {
  $email = $_POST['signin_email'];
  $password = $_POST['signin_password'];

  
  $stmt = $link->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
  if ($stmt === false) {
    die("Error: " . $link->error);
  }

  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result && $result->num_rows > 0) {
    $_SESSION['user_email'] = $email;
    header("Location: home.php");
    exit();
  } else {
    $message = "Email Or password Is Incorrect!";
  }

  $stmt->close();
}

// Sign Up
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['fullname'])) {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check User
  $check = $link->prepare("SELECT * FROM users WHERE email = ?");
  if ($check === false) {
    die("Error: " . $link->error);
  }
  $check->bind_param("s", $email);
  $check->execute();
  $checkResult = $check->get_result();

  if ($checkResult && $checkResult->num_rows > 0) {
    $message = "This Email Is Alredy Exist!";
  } else {
    $stmt = $link->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
    if ($stmt === false) {
      die("Error: " . $link->error);
    }
    $stmt->bind_param("sss", $fullname, $email, $password);
    if ($stmt->execute()) {
      $message = "Account Is Successfully Created! You Can Sign In Now.";
    } else {
      $message = "Error With Creating Your Account.";
    }
    $stmt->close();
  }

  $check->close();
}

// Close Conn
$link->close();
?>







<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login & Sign Up</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      background: linear-gradient(to right, #4b6cb7, #182848);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 420px;
      padding: 30px;
    }

    .form-title {
      text-align: center;
      font-size: 1.5rem;
      margin-bottom: 20px;
      font-weight: 600;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #4b6cb7;
      color: #fff;
      border: none;
      font-size: 1rem;
      border-radius: 6px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: #3a5ca4;
    }

    .form-toggle {
      display: flex;
      justify-content: space-around;
      margin-bottom: 20px;
    }

    .form-toggle button {
      background: none;
      border: none;
      font-weight: bold;
      font-size: 1rem;
      color: #4b6cb7;
      cursor: pointer;
    }

    .form-toggle button.active {
      border-bottom: 2px solid #4b6cb7;
    }

    .hidden {
      display: none;
    }

    .message {
      text-align: center;
      margin-top: 15px;
      font-weight: bold;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form-toggle">
      <button id="show-login" class="active">Login</button>
      <button id="show-signup">Sign Up</button>
    </div>

    <!-- Login Form -->
    <form id="login-form" method="post" action="">
      <p class="form-title">Sign In</p>
      <div class="form-group">
        <input type="email" name="signin_email" placeholder="Your Email" required>
      </div>
      <div class="form-group">
        <input type="password" name="signin_password" placeholder="Your Password" required>
      </div>
      <button type="submit" class="submit-btn">Login</button>
    </form>

    <!-- Sign Up Form -->
    <form id="signup-form" class="hidden" method="post" action="">
      <p class="form-title">Create Account</p>
      <div class="form-group">
        <input type="text" name="fullname" placeholder="Full Name" required />
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Email" required />
      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <button type="submit" class="submit-btn">Sign Up</button>
    </form>

    <?php if (!empty($message)) {
      echo "<p class='message'>$message</p>";
    } ?>
  </div>

  <script>
    const loginForm = document.getElementById("login-form");
    const signupForm = document.getElementById("signup-form");
    const showLogin = document.getElementById("show-login");
    const showSignup = document.getElementById("show-signup");

    showLogin.addEventListener("click", () => {
      loginForm.classList.remove("hidden");
      signupForm.classList.add("hidden");
      showLogin.classList.add("active");
      showSignup.classList.remove("active");
    });

    showSignup.addEventListener("click", () => {
      signupForm.classList.remove("hidden");
      loginForm.classList.add("hidden");
      showSignup.classList.add("active");
      showLogin.classList.remove("active");
    });
  </script>
</body>

</html>
