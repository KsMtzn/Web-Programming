<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 
 
 define('DBHOST', 'dblab.nonrelevant.net');
 define('DBUSER', 'lab1819omada15');
 define('DBPASS', 'kokpanvas1312');
 define('DBNAME', 'lab1819omada15');
 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
 
 
 if ( !$conn ) {
  die("Connection failed : " . mysqli_error($conn));
 }
 

 ?>