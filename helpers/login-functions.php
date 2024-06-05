<?php

function login($username, $password, $connection) {
  // Preparare la password
  $hashedPassword = md5($password);

  // Soggetto a SQL injection
  // $sql = "SELECT * FROM `users` WHERE `password` = '{$hashedPassword}' AND `username` = '{$username}'";
  // $result = $connection->query($sql);

  // Se nella query dobbiamo usare dei dati arrivati dall'utente dobbiamo sempre usare prepared statement
  $statement = $connection->prepare("SELECT * FROM `users` WHERE `password` = ? AND `username` = ?");
  $statement->bind_param("ss", $hashedPassword, $username);
  $statement->execute();
  $result = $statement->get_result();

  // Se nel risultato ci sono delle righe, allora abbiamo trovato la corrispondenza
  if ($result->num_rows > 0) {
    // Prendo i dati della prima riga in formato di array associativo
    $row = $result->fetch_assoc();
    // Leggo i dati dell'utente dall'array associativo
    $id = $row["ID"];
    $username = $row["username"];
    // Salvo i dati dell'utente loggato nella sessione
    $_SESSION["user_id"] = $id;
    $_SESSION["username"] = $username;
  }
}