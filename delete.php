<?php

 require_once('./db.php');
$sql='DELETE FROM users WHERE user_id=?';
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "Failed";
  }
  else{
   
    $user_id=6;
    mysqli_stmt_bind_param($stmt,'i',$user_id);
    mysqli_stmt_execute($stmt);
  }

?>