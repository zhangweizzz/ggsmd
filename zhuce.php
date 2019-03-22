<?php
     @header("Access-Control-Allow-Origin:*");
     @header("content-type:text/html;charset=utf8");
     mysql_connect("b-wqhtqutzrhmzks.bch.rds.gz.baidubce.com","b_wqhtqutzrhmzks","123456");
     mysql_select_db("b_wqhtqutzrhmzks");
    mysql_query("set character set 'utf8'");


   $phone =$_GET["phone"];
   $name=$_GET["name"];
   $pwd=$_GET["pwd"];

   $str="insert into zhuce(userpwd,username,userphone) values('$pwd','$name','$phone')";

   $result = mysql_query($str);