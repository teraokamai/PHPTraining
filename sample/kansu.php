<?php
  /*
    関数
  */
  hyouzyun(169);

  function hyouzyun($s){
    $sc = $s / 100;
    $sb = round($sc * $sc * 22, 1);
    print "標準体重は".$sb."kgです";
  }
?>

