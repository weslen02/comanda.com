
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Comanda</th>
      <th scope="col">Data da Comanda</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preco Unitário</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($lista_comFin as $comandaFin) : ?>
    <tr>
      <td><?php echo $comandaFin['num_comanda']; ?></td>
      <td><?php echo $comandaFin['data_registro']; ?></td>
      <td><?php echo $comandaFin['produto']; ?></td>
      <td><?php echo $comandaFin['quantidade']; ?></td>
      <td><?php echo $comandaFin['preco_unitario']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>