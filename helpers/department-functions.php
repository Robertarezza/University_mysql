<?php

function getAllDepartments($connection) {

  $sql = "SELECT * FROM `departments`;";
  $result = $connection->query($sql);

  $departments = [];

  if ($result && $result->num_rows > 0) {
    // Posso prelevare i risultati di ogni riga
    $row = $result->fetch_object();
    while ($row) {
      $newDepartment = new Department($row->id, $row->name);
      $newDepartment->setAddress($row->address);
      $newDepartment->setPhone($row->phone);
      $newDepartment->setHeadOfDepartment($row->head_of_department);
      $newDepartment->setWebsite($row->website);
      $departments[] = $newDepartment;
      $row = $result->fetch_object();
    }
  }

  return $departments;
}