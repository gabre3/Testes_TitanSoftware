<html>

<style>
table, th, td {
  border:1px solid black;
}
</style>

<body>

<table style="width:100%">
  <tr>
    <th>PRODUTOS</th>
    <th>PREÇOS</th>
    <th>COR</th>
  </tr>
  <tr>
    <td><?php echo $_GET["PRODUTOS"]; ?></td>
    <td><?php echo $_GET["PREÇOS"]; ?></td>
    <td><td><?php echo $_GET["COR"]; ?></td></td>
  </tr>
</table>

</body>
</html>