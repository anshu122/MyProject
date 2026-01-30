<!-- login page -->
<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>login_page</title>
  <link rel="stylesheet" href="../css/login.css">
  <style>
    html body{
      background-color: #f6f9fd;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div id='head_div'>
    <h3>Online voting system</h3>
  </div>
  <p id="pid">Welcome to Login page</p>
  <div class="container">
    <h4 class="head4">Login</h4>
    <form action="../api/loginBackened.php" onsubmit="return check_validation()" method="POST">

      <div class="form_input">
        <div class="input-group">
          <span class="span_font"><i class="fa fa-envelope"></i></span>
        </div>
        <input id="email" name='email' class="input_field" placeholder="Enter Username" type="email">
      </div>
      <div class="span_div">
        <span id="email_error" class="error_span"></span>
      </div>

      <div class="form_input">
        <div class="input-group">
          <span class="span_font"><i class="fa fa-lock"></i></span>
        </div>
        <input id="password" name='password' class="input_field" placeholder="Enter password" type="password">
      </div>
      <div class="span_div">
        <span id="pass_error" class="error_span"></span>
      </div>

      <div class="form_input">
        <div class="input-group">
          <span class="span_font"><i class="fa fa-user"></i></span>
        </div>
        <select name="role" id="roleid" class="input_field">
          <option value="1" selected>Voter</option>
          <option value="2">Party</option>
        </select>
      </div>
      <div class="span_div">
        <span id="pass_error" class="error_span"></span>
      </div>
     
      <div class="form_input">
        <button type="submit" name='submit' class="btn">Login Now</button>
      </div>
      <p class="bottom_cls">Don't Have an account? <a href="signup.php">SignUp</a></p>
    </form>
  </div>

  <script src="../js/loginValidate.js"></script>
</body>
</html>