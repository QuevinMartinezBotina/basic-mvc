<html>
 <head>
   <title>LIBRERIA UAZON</title>
 </head>
 <body>
  <h1>Libros dados de alta en nuestra libreria</h1>
  <table border="1">
   <tr>
    <th>TITULO</th>
    <th>PRECIO</th>
   </tr>
   <?php foreach ($libros as $libro): ?>
    <tr>
      <td><?php echo $libro['titulo']?></td>
      <td><?php echo number_format($libro['precio'],2)?></td>
    </tr>
  <?php endforeach; ?>
  </table>

  <a href="http://localhost/basic-mvc/index.php?controller=libros&action=ver&id=1">Especifico</a>

</body>
</html>