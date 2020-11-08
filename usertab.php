<style>
table
{
  border-collapse: collapse;
}
td, th
{
  padding: 10px;
  border: 2px solid darkgray;
}
</style>
<?php
  require_once "dbase.php";
  $stmt = $pdo->query("SELECT * FROM user");
?>
<center>
  <table><tr><th>ID</th><th>Fname</th><th>LName</th><th>Email</th><th>Login</th><th>Password</th></tr>
  <?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo "<tr><td>";
    echo($row['id']);
    echo "</td>";
    echo "<td>";
    echo($row['fname']);
    echo "</td>";
    echo "<td>";
    echo($row['fname']);
    echo "</td>";
    echo "<td>";
    echo($row['email']);
    echo "</td>";
    echo "<td>";
    echo($row['login']);
    echo "</td>";
    echo "<td>";
    echo($row['password']);
    echo "</td>";
    echo "</tr>";
  }
  ?>
  </table>
  </center>