<?php

include '../api/dbcon.php';

if(isset($_POST['submit']))  
{
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $mobile=mysqli_real_escape_string($con,$_POST['phone']);
  $password=mysqli_real_escape_string($con,$_POST['password']);
  $cpassword=mysqli_real_escape_string($con,$_POST['cpass']);

  $pass=password_hash($password,PASSWORD_BCRYPT);
  $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

  $emailquery=" select * from signup where email= '$email' ";
  $query=mysqli_query($con,$emailquery);

  $emailcount=mysqli_num_rows($query);

  if($emailcount>0)
  {
    ?>
    <script>
    alert("Email already exists!");
    </script>
    <?php
  }
  else
  {
    if($password === $cpassword)
    {
        $insertquery= " insert into signup (name,email,mobile,password,cpassword) values ('$name','$email','$mobile','$pass','$cpass')";

        $iquery=mysqli_query($con,$insertquery);

        if($iquery)
        {
          ?>
          <script>
            alert("signup successful.");
          </script>
           <script>
            location.replace("../routes/login.php");
          </script>
          <?php
        }
        else
        {
          ?>
          <script>
           alert("signup Failed!");
          </script>
          <?php
        }
    }
    else
    {
      ?>
      <script>
      alert("password not matched");
      </script>
      <?php
    }
  }
}
?>