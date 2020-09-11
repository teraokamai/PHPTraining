<?php
if(mail("送信先メールアドレス","Test","This mail is Test")){
  print "SUCCESS";
}else{
  print "ERROR";
}
?>