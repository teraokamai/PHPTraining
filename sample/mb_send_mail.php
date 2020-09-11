<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");

if(mb_send_mail("送信先メールアドレス","基礎からのPHP","てすとです")){
  print "送信成功";
}else{
  print "送信失敗";
}
?>