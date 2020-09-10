<?php
  /*
  while文
  */
  $r = 16;
  while($r <= 250){
    $rh = dechex($r);
    print "<FONT COLOR = #{$rh}0000>赤色の変化</FONT><br>";
    $r += 10;
  }
?>