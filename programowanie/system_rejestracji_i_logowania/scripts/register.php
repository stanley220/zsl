<?php

  require_once './connect.php';
  $pass = password_hash($_POST['pass1'], PASSWORD_DEFAULT);
  $sql = "INSERT INTO `users` (`id`, `name`, `email`, `pass`, `create_date`) VALUES (NULL, '$_POST[name]', '$_POST[email1]', '$pass', current_timestamp());";
  $result = $conn->query($sql);
  header('location: ../index.php');

?>
