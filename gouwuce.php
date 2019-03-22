<?php
     @header("Access-Control-Allow-Origin:*");
     @header("content-type:text/html;charset=utf8");
     mysql_connect("b-wqhtqutzrhmzks.bch.rds.gz.baidubce.com","b_wqhtqutzrhmzks","123456");
     mysql_select_db("b_wqhtqutzrhmzks");
    mysql_query("set character set 'utf8'");


  $id =$_GET["idz"];
  $val=$_GET["valz"];
  $monry =$_GET["monry"];
  $userimg =$_GET["userimg"];

  $str="insert into gouwuce(id,val,monry,userimg) values('$id','$val','$monry','$userimg')";

   mysql_query($str);
$list =array();

//     while($item=mysql_fetch_array($result)){
//         $temp =array();
//         $temp["userimg"]=$item["userimg"];
//         $temp["monry"]=$item["monry"];
//         $temp["val"]=$item["val"];

    
//        $list[] =$temp;
//     }
    $count = mysql_affected_rows();
    if($count>0){
        $list["code"] =1;
    }else{
        $list["code"] =0;
    }
    
    echo  json_encode($list);

    ?>