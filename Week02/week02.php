<?php
  include 'error.php';

  $formOK = true;
  $fav_num = $_POST['num'];
  $favs = $_POST['favs'];

  print_r ($favs);
  echo "<p/>";

  if (empty($fav_num) || ! is_numeric($fav_num) ) {
     $formOK = false;
     echo "Enter your favorite number again.<br />";
  }
  //if ($favs < 2){
      //$formOk = false;
      //echo "You must enter two or more favorite activities.<br/>";
  //}
  if ($formOK) {
     echo "Your favorite number is $fav_num. ";

     // concatenate selection values into a long string
     $your_favs = "";
     $fav_cnt = count($favs);
     $img ="";
     for ( $i=0; $i < $fav_cnt; $i++ ){

         if ( $i == $fav_cnt  - 1 ) {
            $your_favs =  $your_favs . "and $favs[$i].";
         }
         else {
            $your_favs =  "$favs[$i], " . $your_favs;
         }

         if (!strcmp($favs[$i], 'watch scifi'))
         {
             echo "<br />";
             echo '<IMG SRC = "sci-fi-city.jpg"/>';
             echo "<br />";
         }
     }
     echo "You like to $your_favs";
  }
?>
