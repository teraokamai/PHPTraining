<?php
$obj = new human();

$obj->name = "田中";
$obj->length = 175;

print $obj->name."さんの標準体重は<br>";
print $obj->hyouzyun();

class human{
  public $name;
  public $length;

  function hyouzyun(){
    $s = $this->length / 100;
    return $s * $s * 22;
  }
}
?>