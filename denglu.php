<?php
     @header("Access-Control-Allow-Origin:*");
     @header("content-type:text/html;charset=utf8");
     mysql_connect("b-wqhtqutzrhmzks.bch.rds.gz.baidubce.com","b_wqhtqutzrhmzks","123456");
     mysql_select_db("b_wqhtqutzrhmzks");
    mysql_query("set character set 'utf8'");



$username = $_GET["username"];
$userpwd = $_GET["userpwd"];
$str = "select * from  zhuce where username = '$username'";

// $result = mysql_query($str);
// $item= mysql_fetch_array($result);
// $obj = array();
// if($item){
//     $existPwd = $item["userpwd"];
//     if($existPwd == $userpwd){
//         $obj["code"]=1;
//         $obj["msg"]= "登陆成功";
//         $obj["id"]= $item["id"];
//         $obj["user"]= $item["username"];
//     }else{
//         $obj["code"]=0;
//         $obj["msg"]= "用户名和密码不匹配";
//     }
// }else{
//         $obj["code"]=0;
//         $obj["msg"]= "用户名不存在";
// }
// echo json_encode($obj);
$result = mysql_query($str);
$item  = mysql_fetch_array($result);

$obj = array();

if($item){
  $existPwd = $item["userpwd"];
  if($existPwd==$userpwd){
    $obj["code"] =1;
    $obj["msg"] = "登陆成功";
  }else{
    $obj["code"] = 0 ;
    $obj["msg"]  = "用户名密码不一致";
  }
}else{
  $obj["code"] = 0 ;
  $obj["msg"]  = "用户名不存在";
}
echo json_encode($obj);
?>