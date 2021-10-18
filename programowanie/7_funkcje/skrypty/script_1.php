<?php
  if (!empty($_POST['name'])) {
    require_once '../funkcje/function_1.php';
    //echo text();
    $string="lokal";
    echo name('Krystyna').'<br>';
    echo 'Imie: '.name($_POST['name']).'<br>';
    echo validateString($_POST['name'], 10);
  }
?>
