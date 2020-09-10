<?php
  /*
  結合
  */
  $a = "基礎";
  $b = "からの";
  $c = "PHP";
  print "「{$a}」{$b}知識を重視した{$c}の参考書です<br>";
  print $a.$b.$c."<br>";

  $a .= "からの"."PHP"."<br>";
  print $a;

  /*
  改行を認識して出力
  */
  print nl2br("改行
  $a");
?>
