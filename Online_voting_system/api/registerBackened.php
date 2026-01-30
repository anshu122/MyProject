<?php

include 'dbcon.php';

if(isset($_POST['submit']))  
{
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $mobile=$_POST['phone'];
  $address=mysqli_real_escape_string($con,$_POST['address']);
  $password=mysqli_real_escape_string($con,$_POST['password']);
  $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $role=mysqli_real_escape_string($con,$_POST['role']);

  $pass=password_hash($password,PASSWORD_BCRYPT);
  $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

  $emailquery=" select * from `signup` where email= '$email' ";
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
        move_uploaded_file($tmp_name,"../upload_image/$image");
        $insertquery= " insert into `signup` (name,email,phone,address,password,cpassword,image,role,status,votes) values ('$name','$email','$mobile','$address','$pass','$cpass','$image','$role',0,0)";

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
      <script>
        location.replace("../routes/signup.php");
      </script>
      <?php
    }
  }
}
?>