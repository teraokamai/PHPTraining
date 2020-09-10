<?php
  /*
    文字列を取り出す
  */
  print mb_strrchr("一二三四五","三",false)."<br>";

  /*
    文字数を調べる
  */
  print mb_strlen("一二三四五")."<br>";

  /*
    全角/半角を変換
  */
  print "ｎａｍｅはニシザワ"."<br>";
  print mb_convert_kana("ｎａｍｅはニシザワ","rc")."<br>";

  /*
    大文字/小文字への変換
  */
  print "ｎａｍｅ"."<br>";
  print mb_convert_case("ｎａｍｅ", MB_CASE_TITLE)."<br>";

  /*
   文字列の繰り返し
  */
  print str_repeat("！",10);
?>