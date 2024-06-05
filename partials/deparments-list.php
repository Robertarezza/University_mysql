<h2>Lista di dipartimenti</h2>
<?php if (count($departments) > 0) { ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Indirizzo</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($departments as $department) { ?>
        <tr>
          <th scope="row"><?php echo $department->getId(); ?></th>
          <td><?php echo $department->getName(); ?></td>
          <td><?php echo $department->getAddress(); ?></td>
          <td></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } else { ?>
  <h4>Nessun dipartimento trovato</h4>
<?php } ?>