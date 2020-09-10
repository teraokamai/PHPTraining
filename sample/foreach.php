<?php
  /*
    foreach文
  */
  $colors = array("red","yello","blue");

  foreach($colors as $color){
    print $color."<br>";
  }

  $sales = array("sun" => 10, "mon" => 20, "tue" => 30, "wed" => 40, "thu" => 50, "fri" => 60, "sat" => 70);
  $sum = 0;
  
  foreach($sales as $k => $v){
    print "キーが{$k}の要素の値は{$v}です<br>";
    $sum += $v;
  }
  print "合計は{$sum}です";
?>