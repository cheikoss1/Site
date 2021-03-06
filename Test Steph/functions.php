<?php

require_once "dbConst.php";

function connectDB(){

  $dsn = DBDRIVER . ":host=" . DBHOST . ";dbname=" . DBNAME;

  try {
    $connection = new PDO($dsn, DBUSER, DBPWD);
  } catch (Exception $e) {
    die("SQL error:" . $e->getMessage());
  }

  return $connection;
}
