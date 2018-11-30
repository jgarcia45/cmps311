<?php
  // scriptname: week01.php
  $formOK = true;
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $room = $_POST['room'];
  $entree = $_POST['entree'];
  $message = $_POST['message'];

  if (empty($firstname)){
     $formOK = false;
     echo "You forgot your first name.<br>";
     echo "<p><a href='javascript:history.go(-1)' >&laquo; Go fix it</a></p>";
  }

  if (empty($lastname)){
     $formOK = false;
     echo "You forgot your last name.<br>";
     echo "<p><a href='javascript:history.go(-1)' >&laquo; Go fix it</a></p>";
  }

  if (empty($room)){
     $formOK = false;
     echo "You forgot your room number.<br>";
     echo "<p><a href='javascript:history.go(-1)' >&laquo; Go fix it</a></p>";
  }

  if (empty($entree)){
      $formOK = false;
      echo "You forgot to select an entree.<br>";
      echo "<p><a href='javascript:history.go(-1)' >&laquo; Go fix it</a></p>";
  }

  if ($formOK) {
     echo "<b>Menu ordered by</b>: $firstname $lastname<br>";
     echo "<b>Deliver to Room</b>: $room<br>";
     echo "<b>Special instructions</b>: $message <br>";
  }
?>
