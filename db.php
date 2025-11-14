<?php
$h='localhost';
$u='root';
$p='';
$d='user_files';
try{
  $c=new PDO("mysql:host=$h;dbname=$d;charset=utf8mb4",$u,$p);
  $c->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
  exit('DB_FAIL');
}
