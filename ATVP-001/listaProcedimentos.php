<!DOCTYPE html>
<html>
<head>
  <meta  charset="UTF-8">
  <title></title>
</head>
<body>
  <table>
    <tr>
      <th> Nome</th>
      <th> Pre�o</th>
    </tr>
    <?php
      while($linha = $resultado->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $linha["nome"];?></td>
          <td><?php echo $linha["preco"];?></td>
        </tr>
        <?php } ?>
  </table>
</body>
</html>