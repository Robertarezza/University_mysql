<?php
require_once __DIR__ . "/Models/department.php";
require_once __DIR__ . "/helpers/database.php";
require_once __DIR__ . "/helpers/department-functions.php";
require_once __DIR__ . "/helpers/login-functions.php";

if (!isset($_SESSION)) {
  session_start();
}

// Faccio partire la connessione al DB
$connection = startConnection();

// Verificare se dobbiamo eseguire login
if (isset($_POST["username"]) && isset($_POST["password"])) {
  $password = $_POST["password"];
  $username = $_POST["username"];
  login($username, $password, $connection);
}

// Prelevo tutti i dipartimenti solo se l'utente abbia fatto login
if (isset($_SESSION["user_id"]) && isset($_SESSION["username"])) {
  $departments = getAllDepartments($connection);
}

// Chiudo la connessione al DB
$connection->close();
?>

<?php include __DIR__ . "/partials/head.php"; ?>

<main>
  <div class="container">
    <?php if (empty($_SESSION["user_id"]) && empty($_SESSION["username"])) { ?>
      <!-- Form di login da mostrare solo se l'utente non abbia fatto ancora login -->
      <?php if (isset($_GET["logout"]) && $_GET["logout"] === "success") { ?>
        <div class="alert alert-success">Logout è stato eseguito correttamente</div>
      <?php } ?>
      <?php include __DIR__ . "/partials/login-form.php" ?>
    <?php } else { ?>

      <!-- La tabella che deve essere visualizzata solo se l'utente ha fatto login -->
      <?php include __DIR__ . "/partials/deparments-list.php"; ?>
    <?php } ?>
  </div>

</main>

<?php include __DIR__ . "/partials/footer.php"; ?>