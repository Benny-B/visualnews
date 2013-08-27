<?php
  
  /* connection to database */
  try{
    $dbh = new PDO('mysql:host=localhost';dbname='news',root,'Mathusalem2013');
      }
  catch(PDOException $ex){
        print $ex->getMessage();
      }
  


?>