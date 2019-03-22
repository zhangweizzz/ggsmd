<?php
    @header("Access-Control-Allow-Origin:*");
    @header("content-type:text/html;charset=utf8");
    mysql_connect("192.168.50.176","root","root");
    mysql_select_db("gerenxiangmu");
   mysql_query("set character set 'utf8'");

   $id =$_GET["id"];
echo $id;
   $str = "delete from gouwuce where id = $id";

   mysql_query($str);


?>
