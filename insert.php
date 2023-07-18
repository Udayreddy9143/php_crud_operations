<?php
  require_once('./db.php');

  $sql='INSERT INTO users(user_name,user_email,user_password) VALUES(?,?,?)';
  $stmt=mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "failed";
  
  }
  else{
    $user_name='uday';
    $user_email='udayr9154@gmail.com';
    $user_password='secret1';
    mysqli_stmt_bind_param($stmt,'sss',$user_name,$user_email,$user_password);
    mysqli_stmt_execute($stmt);
  }
?>