<?php

  if (password_verify(string $password, string $hash)) {
    echo "ok";
  }else{
    echo "error";
  }

?>
