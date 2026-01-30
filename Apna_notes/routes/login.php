<!-- login page -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>login_page</title>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<?php

include '../api/dbcon.php';

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $email_search=" select * from signup where email='$email' ";
    $query=mysqli_query($con,$email_search);

    $email_count=mysqli_num_rows($query);

    if($email_count)
    {
        $email_pass=mysqli_fetch_assoc($query);
        $db_pass=$email_pass['password'];

        $_SESSION['name']=$email_pass['name'];

        $pass_decode=password_verify($password,$db_pass);
        if($pass_decode)
        {
          ?>
          <script>
           alert("Login successful!");
          </script>
          <script>
            location.replace("main.php");
          </script>
          <?php
        }
        else
        {
          ?>
          <script>
           alert("Login unsuccessful!");
          </script>
          <?php
        }
    }
    else
    {
      ?>
      <script>
      alert('Invalid email!');
      </script>
      <?php
    }
}

?>

  <div id='head_div'>
    <h3>Apna Notes</h3>
  </div>
  <p id="pid">Welcome to Login page</p>
  <div class="container">
    <h4 class="head4">Login</h4>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" onsubmit="return check_validation()" method="POST">

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
        <input id="password" name='password' class="input_field" placeholder="Enter password" type="text">
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

<script src="js/loginValidate.js"></script>
</body>
</html>