<?php
  /*
    連想配列
  */
  $sales["sun"] = 10;
  $sales["mon"] = 20;

  $sales2 = array("sun" => 10,"mon" => 20,"tue" => 30, "wed" => 40,"thu" => 50, "fri" => 60, "sat" => 70);

  print $sales2["sun"] + $sales2["sat"];
?>