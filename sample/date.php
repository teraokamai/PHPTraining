<?php
  /*
    date関数
    printf関数
  */

  print nl2br("今日は".date("Y")."年".date("m")."月".date("j")."日です
  ");
  print date("きょうはY年m月j日です");

  $form = "%sは%d年%s月%d日です";
  printf($form, "今日",date("Y"),date("m"),date("j"));
?>