<?php
  /*
    global:グローバル変数を関数の中で使用できるようにする
  */
  $s = 158;
  hyouzyun();

  function hyouzyun(){
    global $s;
    $sc = $s / 100; 
    $sb = round($sc * $sc * 22, 1);
    print "標準体重は".$sb."kgです";
  }
?>