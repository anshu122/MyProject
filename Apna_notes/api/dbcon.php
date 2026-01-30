<?php

session_start();

$server="localhost:3307";
$user="root";
$password="";
$db="epic_notes_db";

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