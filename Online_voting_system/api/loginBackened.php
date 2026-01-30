<?php
session_start();

include '../api/dbcon.php';

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    $email_search=" select * from `signup` where email='$email' ";
    $query=mysqli_query($con,$email_search);

    $email_count=mysqli_num_rows($query);
    if($email_count)
    {
        $email_pass=mysqli_fetch_assoc($query);
        $db_pass=$email_pass['password'];
        $pass_decode=password_verify($password,$db_pass);
        if($pass_decode)
        {
          $role_search=" select * from `signup` where email='$email' and role='$role' ";
          $role_query=mysqli_query($con,$role_search);
          $role_count=mysqli_num_rows($role_query);
          if($role_count)
          {
            $user_data=mysqli_fetch_array($role_query);
            $groups_search="select * from signup where role='2' ";
            $groups_query=mysqli_query($con,$groups_search);
            $groups_data=mysqli_fetch_all($groups_query,MYSQLI_ASSOC);

            $_SESSION['user_data']=$user_data;
            $_SESSION['groups_data']=$groups_data;

            ?>
            <script>
               alert("Login successful!");
            </script>
            <script>
                location.replace("../routes/dashboard.php");
            </script>
            <?php
          }
          else
          {
            ?>
            <script>
             alert("Invalid role!");
            </script>
            <script>
                 location.replace("../routes/login.php");
            </script>
            <?php
          }
        }
        else
        {
          ?>
          <script>
           alert("Invalid password!");
          </script>
          <script>
              location.replace("../routes/login.php");
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
      <script>
        location.replace("../routes/login.php");
      </script>
      <?php
    }
}

?>
