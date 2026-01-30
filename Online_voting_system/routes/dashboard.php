<?php
   session_start();
   if(!isset($_SESSION['user_data']))
   {
       header("location:login.php");
   }
   $user_data=$_SESSION['user_data'];
   if(isset($_SESSION['groups_data']))
   {
       $groups_data=$_SESSION['groups_data'];
   }
   if($_SESSION['user_data']['status']==0)
   {
       $status='<b style="color: red">Not voted</b>';
   }
   else{
    $status='<b style="color: green">voted</b>';
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard-online voting system</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 id="headerId">Online voting system</h2>
    <div class="logdiv">
          <a href="logout.php"><p class="span_font"><i class="fa fa-sign-out"></i></p></a>
    </div>

    <div id="mainSection">
        <div id="profile">
              <center><img src="../upload_image/<?php echo $user_data['image'] ?>" alt="error loading image" height='100' width='100'> </center>
              <h4>Name: <?php echo $user_data['name'] ?></h4>
              <h4>Contact No: <?php echo $user_data['phone'] ?></h4>
              <h4>Address: <?php echo $user_data['address'] ?></h4>
              <h4>Status: <?php echo $status ?></h4>
        </div>
        <div id="group">
        <?php
            if($_SESSION['groups_data'])
            {
                for($i=0;$i<count($groups_data);$i++)
                {
                    ?>
                    <div>
                        <img id="group_image" src="../upload_image/<?php echo $groups_data[$i]['image'] ?>" alt="error loading image" height='100' width='100'>
                        <b>Group Name: </b><?php echo $groups_data[$i]['name'] ?><br><br>
                        <b>Votes: </b><?php echo $groups_data[$i]['votes'] ?><br><br>
                        <form action="../api/voteBackened.php" method="POST">
                            <input type="hidden" name="gvotes" value="<?php echo $groups_data[$i]['votes'] ?>">
                            <input type="hidden" name="groupId" value="<?php echo $groups_data[$i]['id'] ?>">
                            <!-- <input type="submit" name="gvotebtn" value="Vote" class="gvotebtn"> -->
                            <?php
                              if($_SESSION['user_data']['status']==1){
                                    ?>
                                    <button disabled class="votedBtn" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button name="gvotebtn" class="gvotebtn" type="submit">Vote</button>
                                    <?php
                                }
                                ?>
                        </form>
                    </div>
                        <hr>
                    <?php
                }
            }
            else
            {
                ?>
                    <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                        <b>No parties available right now.</b>    
                    </div>
                <?php
            }
        ?>
        </div>
    </div>
</body>
</html>