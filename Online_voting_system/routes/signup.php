<!-- signup form -->
<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>signup form</title>
  <link rel="stylesheet" href="../css/signup.css">
  <style>
    html body{
      background-color: #fbf6dd;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div id='head_div'>
    <h3 id='head_txt'>Online voting system</h3>
  </div>
  <p id="pid">Welcome to registration page</p>
  <div class="mycontainer">
    <h4 class="head4">Create Account</h4>

    <form class="row gy-2 gx-3 align-items-center" action="../api/registerBackened.php"
      onsubmit="return check_validation()" method="POST" enctype="multipart/form-data">

      <!-- <div class="span_div">
        <span id="user_error" class="error_span"></span>
      </div> -->

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInputGroup">Full name</label>
        <div class="input-group">
          <div class="input-group-text"><i class="fa fa-user"></i></div>
          <input type="text" class="form-control" id="name" name='name' placeholder="Full name">
        </div>
      </div>

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInputGroup">email</label>
        <div class="input-group">
          <div class="input-group-text"><i class="fa fa-envelope"></i></div>
          <input type="text" class="form-control" id="email" name='email' placeholder="Email">
        </div>
      </div>

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInputGroup">phone</label>
        <div class="input-group">
          <div class="input-group-text"><i class="fa fa-phone"></i></div>
          <input type="number" class="form-control" id="phone" name='phone' placeholder="Contact No">
        </div>
      </div>

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInputGroup">address</label>
        <div class="input-group">
          <div class="input-group-text"><i class="fa fa-address-book"></i></div>
          <input type="text" class="form-control" id="address" name='address' placeholder="Address">
        </div>
      </div>

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInputGroup">password</label>
        <div class="input-group">
          <div class="input-group-text"><i class="fa fa-lock"></i></div>
          <input type="password" class="form-control" id="password" name='password' placeholder="Create password">
        </div>
      </div>

      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInputGroup">cpassword</label>
        <div class="input-group">
          <div class="input-group-text"><i class="fa fa-lock"></i></div>
          <input type="password" class="form-control" id="cpassword" name='cpassword' placeholder="Confirm password">
        </div>
      </div>


      <div class="mb-3">
        Upload image:<input type="file" id="image" name="image" class="form-control" aria-label="file example">
        <div class="invalid-feedback">Please select your image.</div>
      </div>

      <div class="col-auto">
        Select Role:
        <select class="form-select" id="role" name="role">
          <!-- <option selected>Choose...</option> -->
          <option value="1" selected>Voter</option>
          <option value="2">Party</option>
        </select>
      </div>

      <div class="form_input">
        <button type="submit" name='submit' class="mybtn">Create Account</button>
      </div>
      <p class="bottom_cls">Already Have an account? <a href="login.php">Log In</a></p>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="../js/signupValidate.js"></script>
</body>

</html>