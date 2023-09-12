<?php

    $conn = new mysqli("localhost", "root", "", "unge");

  /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    
    /* change character set to utf8 */
    if (!$conn->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $conn->error);
    } else {
      //  printf("Current character set: %s\n", $conexion->character_set_name());
    }
    
  //  $conexion->close();