<?php

function get_db() {
  $db_host = "localhost";
  $db_usrname = "root";
  $db_passwrd = "";
  $db_name = "php_buddy";
  
  $db_connection = mysqli_connect($db_host, $db_usrname, $db_passwrd, $db_name);
  
  // If there's any error, show it on the screen, and stop your program.
  if ( mysqli_connect_error() ) {
    echo mysqli_connect_error();
    exit;
  }

  return $db_connection;
}
