<?php
//time zone
date_default_timezone_set('Asia/Kolkata');
//database connection
$con=mysqli_connect("database-1.c7j0ofgsqkxi.us-east-1.rds.amazonaws.com","admin","","preschooldb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
