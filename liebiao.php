<?php
     @header("Access-Control-Allow-Origin:*");
     @header("content-type:text/html;charset=utf8");
     mysql_connect("b-wqhtqutzrhmzks.bch.rds.gz.baidubce.com","b_wqhtqutzrhmzks","123456");
     mysql_select_db("b_wqhtqutzrhmzks");
    mysql_query("set character set 'utf8'");


   $str  = "select * from goodlist";
   $result = mysql_query($str);
   $list =array();
   
   while($item=mysql_fetch_array($result)){
   $temp =array();
   $temp["userimg"]=$item["userimg"];
   $temp["monry"]=$item["monry"];
   $temp["xiaoliang"]=$item["xiaoliang"];
   $temp["pinpaidian"]=$item["pinpaidian"];
    $temp["id"]=$item["id"];
   
   $list[] =$temp;
   }
   echo  json_encode($list);
   
       ?>