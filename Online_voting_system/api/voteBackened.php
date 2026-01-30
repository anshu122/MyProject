<?php
  session_start();
  include('dbcon.php');

  $votes=$_POST['gvotes'];
  $total_votes=$votes+1;
  $groupId=$_POST['groupId'];
  $userId=$_SESSION['user_data']['id'];

  $update_vote_query=mysqli_query($con,"update signup set votes='$total_votes' where id='$groupId' ");
  $update_user_status=mysqli_query($con,"update signup set status=1 where id='$userId' ");
  if($update_vote_query and $update_user_status)
  {
     $groups=mysqli_query($con,"select * from signup where role='2' ");
     $groups_data=mysqli_fetch_all($groups,MYSQLI_ASSOC);
     $_SESSION['user_data']['status']=1;
     $_SESSION['groups_data']=$groups_data;

     ?>
      <script>
          alert("voting successful!");
      </script>
      <script>
          location.replace("../routes/dashboard.php");
      </script>
     <?php
  }
  else{
    ?>
      <script>
          alert("some error occured!");
      </script>
      <script>
          location.replace("../routes/dashboard.php");
      </script>
     <?php
  }
  
?>