<?php
  /*
    多次元配列
  */
  $animals[0][0] = "きつね大";
  $animals[0][1] = "きつね小";
  $animals[1][0] = "ねこ大";
  $animals[1][1] = "ねこ小";
  $animals[2][0] = "こあら大";
  $animals[2][1] = "こあら小";

  print $animals[0][0].$animals[1][0].$animals[2][0];
  print "<br>";
  print $animals[0][1].$animals[1][1].$animals[2][1];

  print "<br>";

  $animals2 = array(
    array("きつね大","きつね小"),
    array("ねこ大","ねこ小"),
    array("こあら大","こあら小")
  );

  print $animals2[0][0].$animals2[1][0].$animals2[2][0];
  print "<br>";
  print $animals2[0][1].$animals2[1][1].$animals2[2][1];
?>