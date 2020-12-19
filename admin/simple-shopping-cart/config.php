<?php

 // $DBhost = "localhost";
  $DBhost = "mysql.hostinger.com";
  $DBuser = "u233484653_oursoil";
  $DBpass = "Jun18th!";
  $DBname = "u233484653_oursoil";
  
  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
        die("ERROR : -> ".$DBcon->connect_error);
     }



?>