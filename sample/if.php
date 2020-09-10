<?php
/*
  if文
*/
  if (date("G") < 12){
    print "<p>午前です</p>";
  }else{
    print "<p>午後です</p>";
  }
?>

<?php
  /*
  printを使用せずに出力
  */
  $num = 2;
  if($num > 1):
?>
<div>条件１</div>
<?php elseif ($num == 1): ?>
<div>条件２</div>
<?php else: ?>
<div>条件３</div>
<?php endif; ?>

<?php
  /*
    要素に値を出力
  */
  if (date("G")<6 or date("G") >=18){
    $a = "pink";
  }elseif (date("G") >= 9){
    $a = "lime";
  }elseif (date("G") >= 6){
    $a = "blue";
  }
?>

<body bgcolor="<?= $a ?>">