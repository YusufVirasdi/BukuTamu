<?php
  $db_host = "localhost";//server hosting yang posisi offline
  $db_user = "root";
  $db_pass = "";
  $db_data = "buku tamu";

  $conn=mysqli_connect($db_host, $db_user, $db_pass);
  mysqli_select_db($conn,$db_data);
  ?>