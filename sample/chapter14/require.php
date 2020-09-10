<?php
  require_once("human.php");
  $obj = new subHuman();
  $obj->name = "佐藤";
  $obj->length = 158;
  $obj->taizyu = 46;

  print $obj->name."さんの健康チェック<br>";
  print "標準体重は".$obj->hyouzyun()."<br>";
  print "体重は".$obj->taizyu."kg<br>";
  print "BMIは".$obj->bmi()."<br>";
  print $obj->himan();
?>