<?php
  /*
    配列
  */
  $color[] = red;
  $color[] = yellow;
  $color[] = blue;

  $color[4] = black;
  $color[3] = white;

  $color2 = array("red","yellow","blue");

  for($n = 0;$n <= 5; $n++){
    print $color[$n]."<br>";
  }

  for($n = 0; $n <= count($color) - 1; $n++){
    print $color[$n]."<br>";
  }

  /*
    list関数で配列の値を一括で代入する
  */
  $a = array('きつね', 'ねこ', 'こあら');
  list($x, $y, $z) = $a;
  print $x."と".$y."と".$z."<br>";

  print "<pre>";
  print_r($color);
  print "</pre>";
  ?>