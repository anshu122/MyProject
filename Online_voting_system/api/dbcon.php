<?php

$server="localhost:3307";
$user="root";
$password="";
$db="my_voting_db";

$con=mysqli_connect($server,$user,$password,$db);

if($con)
{
?>
<script>
  // alert("Database connection successful");
</script>
<?php
}
else
{
    ?>
    <script>
     alert("Connection Failed!");
    </script>
    <?php
}
?>