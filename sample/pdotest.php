<?php
$pdo = new PDO(
  'mysql:dbname=db;host=localhost;charset=utf8mb4',
  '',
  ''
);

$pdo->query("INSERT INTO sample_tb VALUE('kkk5','下敷き',120)");
$ps = $pdo->query("SELECT * FROM sample_tb");
while ($r = $ps->fetch()){
  print $r[0].$r[1].$r[2]."<br>";
}
?>