<?php

  require_once('./db.php');
  $sql='UPDATE users SET user_name=?,user_email=?,user_password=? Where user_id=?';
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "Failed";
  }
  else{
    $user_name='narsimha';
    $user_email='narsimha@gmail.com';
    $user_password='secret';
    $user_id=7;
    mysqli_stmt_bind_param($stmt,'sssi',$user_name,$user_email,$user_password,$user_id);
    mysqli_stmt_execute($stmt);
  }

?>