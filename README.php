<?php
  echo "GGGGGGGGGGGGGGGGG"
  $json_str = file_get_contents('php://input');//接收request的body
  $json_obj = json_decode($json_str);//轉JSON格式
  $myfile = fopen("log.txt","w+") or die("Unable to poen file !");
  fwrite($myfile,"\xEF\xBB\xBF".$json_str);//在字串前加入\xEF\XBB\xBF轉成utf8格式
  fclose($myfile);
  
  
?>
