<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Comanda</th>
      <th scope="col">Data da Comanda</th>
      <th scope="col">Valor Total</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($lista_comandas as $comanda) : ?>
    <tr>
      <td><?php echo $comanda['num_comanda']; ?></td>
      <td><?php echo date('d-m-Y', strtotime($comanda['data_registro'])); ?></td>
      <td><?php echo $comanda['total']; ?></td>
      <td>
        <a href="editar_comanda.php" target="" rel="noopener noreferrer">Editar</a>
        <a href="finalizar_comanda.php" target="" rel="noopener noreferrer">Finalizar</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>