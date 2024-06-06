<?php 
if(!isset($_SESSION)) {
  session_start();
}

if(isset($_POST["logout"]) && $_POST["logout"] === "1") {
  session_destroy();
  //dal server al browser
  header("Location: index.php?logout=success");
}
