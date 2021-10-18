<?php
  function text() {
    echo "test";
    return 'test';
  }
  function name($name) {
    return $name;
  }

  function validateString($string, $length){
    return substr(ucwords(strtolower(trim($string))), 0, $length);
  }
?>
