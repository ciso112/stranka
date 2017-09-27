<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'skola');
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
?>





