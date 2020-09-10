<?php
$obj = new subHuman();
$obj->name = "鈴木";
$obj->length = 158;
$obj->taizyu = 46;

print $obj->name."さんの健康チェック<br>";
print "標準体重は".$obj->hyouzyun()."<br>";
print "体重は".$obj->taizyu."kg<br>";
print "BMIは".$obj->bmi()."<br>";
print $obj->himan();

class human{
  public $name;
  public $length;

  function hyouzyun(){
    $s = $this->length / 100;
    return $s * $s * 22;
  }
}

class subHuman extends Human{
  public $taizyu;

  function bmi(){
    $s = $this->length / 100;
    return $this->taizyu / ($s * $s);
  }

  function himan(){
    $b = $this->bmi();

    if($b >= 40){
      print "肥満度4";
    }elseif($b >= 35){
      print "肥満度3";
    }elseif($b >= 30){
      print "肥満度2";
    }elseif($b >= 25){
      print "肥満度1";
    }elseif($b >= 18.5){
      print "普通体重";
    }else{
      print "低体重";
    }
  }
}
?>