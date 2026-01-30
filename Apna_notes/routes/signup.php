<!-- signup form -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>signup form</title>
  <link rel="stylesheet" href="../css/signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div id='head_div'>
    <h3>Apna Notes</h3>
  </div>
  <p id="pid">Welcome to registration page</p>
  <div class="container">
    <h4 class="head4">Create Account</h4>
    <form action="../api/registerBackened.php" onsubmit="return check_validation()" method="POST">

      <div class="form_input">
        <div class="input-group">
          <span class="span_font"><i class="fa fa-user"></i></span>
        </div>
        <input id="name" name='name' class="input_field" placeholder="Full name" type="text">
      </div>
      <div class="span_div">
        <span id="user_error" class="error_span"></span>
      </div>

      <div class="form_input">
        <div class="input-group">
          <span class="span_font"><i class="fa fa-envelope"></i></span>
        </div>
        <input id="email" name='email' class="input_field" placeholder="Email" type="text">
      </div>
      <div class="span_div">
        <span id="email_error" class="error_span"></span>
      </div>

      <div class="form_input">
        <div class="input-group">
          <span class="span_font"><i class="fa fa-phone"></i></span>
        </div>
        <input id="phone" name='phone' class="input_field" placeholder="Phone number" type="text">
      </div>
      <div class="span_div">
        <span id="phone_error" class="error_span"></span>
      </div>

      <div class="form_input">
        <div class="input-group">
          <span class="span_font"><i class="fa fa-lock"></i></span>
        </div>
        <input id="password" name='password' class="input_field" placeholder="Create password" type="text">
      </div>
      <div class="span_div">
        <span id="pass_error" class="error_span"></span>
      </div>

      <div class="form_input">
        <div class="input-group">
          <span class="span_font"><i class="fa fa-lock"></i></span>
        </div>
        <input id="cpass" name='cpass' class="input_field" placeholder="Re-enter password" type="text">
      </div>
      <div class="span_div">
        <span id="cpass_error" class="error_span"></span>
      </div>

      <div class="form_input">
        <button type="submit" name='submit' class="btn">Create Account</button>
      </div>
      <p class="bottom_cls">Already Have an account? <a href="login.php">Log In</a></p>
    </form>
  </div>

<script src="../js/signupValidate.js"></script>
</body>
</html>