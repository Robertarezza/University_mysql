
<?php

define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root"); // "root" / "";
define("DB_NAME", "university_db1");
define("DB_PORT", 3306);

function startConnection() {
  try {
    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
  } catch (Exception $exception) {
    echo $exception->getMessage();
    die();
  }
  return $connection;
}