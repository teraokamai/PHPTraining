<?php
/*
  鶴の足は2本、亀の足は4本としたとき、
  「鶴と亀の合計」と「鶴の足と亀の足の合計」という
  ２つの数を引数に指定すると鶴の数を返す関数「turu」
  および、亀の数を返す関数「kame」を使って、
  鶴と亀の合計が5匹、鶴と亀の足の合計が14本の時のそれぞれの数を表示する
*/

  $sum = 7;
  $ashi = 22;

  print "合計{$sum}匹で足{$ashi}本だと<br>";
  print "鶴は".turu($sum,$ashi)."羽 亀は".kame($sum,$ashi)."匹";

  function turu($sum,$ashi){
    $turu = $sum - ($ashi - $sum * 2)/2;
    return $turu;
  }

  function kame($sum,$ashi){
    $kame = ($ashi - $sum * 2)/2;
    return $kame;
  }
?>