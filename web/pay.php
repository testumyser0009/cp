<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
$ddh = $_POST['ddh']; //支付宝订单号
       
      $key = $_POST['key']; //KEY验证
       
      $name = $_POST['name']; //备注信息
       
      $lb = $_POST['lb']; //分类 =1 支付宝 =2财付通 =3 微信
       
        $money = $_POST['money'];//金额
         
      $paytime = $_POST['paytime'];//充值时间
       
if($key=="7aacb642bc63bd797c29fcfb24c5a2ce"){
				$Amount=$money;
				$BillNo=$name;
				$hostname="localhost"; //服务器的IP地址 或 服务器的名字 
				$dbuser="root"; //服务器的帐号 
				$dbpasswd="5d*^%DG7F5dgm"; //服务器的密码  改
				$dbname="yongli"; //数据库的名字
				$conn = mysql_connect($hostname,$dbuser,$dbpasswd); //连接数据库 
				if (!$conn){die('Could not connect: ' . mysql_error());}
				//mysql_query("SET NAMES 'utf8'",$conn);
				mysql_select_db($dbname,$conn)or die("Unable to select database!"); 
				//查询当前订单名字
				$s_name_sql = "select username,id from ssc_member_recharge where state=0 and rechargeId=$BillNo";  
				$s_name = mysql_query($s_name_sql) or die("Couldn't execute query!");
				while($row=mysql_fetch_array($s_name))
				{
				   $username=$row['username'];  //充值当前订单号是否存在
				   $id=$row['id']; //订单的ID
				}
				if($username){
				//查询当前订单是否存在
				//$s_rId_sql = "select COUNT(extfield1) as crec from ssc_coin_log where extfield1=$BillNo";  
				//$s_rId = mysql_query($s_rId_sql) or die("Couldn't execute query!");
				//while($row=mysql_fetch_array($s_rId))
				//{
				 //  $extfield1=$row['crec'];  //充值当前订单号是否存在
				//}
				//if($extfield1==0)
				//{ //如果查询出来的订单系统不存在则添加、更新数据
				  // if($czzs !='0'){
				   //  $rechrageAmount=number_format($Amount*(1+$czzs/100.00),2,'.',''); //充值赠送后的金额
				  // }else{
					 $rechrageAmount=$Amount; //无活动
				  // }
				   $s_info_sql = "select uid,coin from ssc_members where username='$username'";  
				   //根据名字username查询当前uid,当前金额
				   $s_info = mysql_query($s_info_sql) or die("Couldn't execute query!");
				   while($row=mysql_fetch_array($s_info)){
				     $uid=$row['uid'];  //充值帐号uid,当前金额
				     $bfAmount=$row['coin'];
				   }
				   $i_c_l = "insert into ssc_coin_log (uid,type,playedId,coin,userCoin,fcoin,liqType,actionUID,actionTime,actionIP,info,extfield0,extfield1) values ('$uid',0,0,'$rechrageAmount','$bfAmount'+'$rechrageAmount',0,1,0,UNIX_TIMESTAMP(),'0','在线充值','$id','$BillNo')";
				   $i_c_l_result=mysql_query($i_c_l);  //插入用户余额更新记录
				   $u_m_r="update ssc_member_recharge set rechargeTime=UNIX_TIMESTAMP(),rechargeAmount='$rechrageAmount',coin='$bfAmount',state='2',info='在线充值' where rechargeid='$BillNo'";
				   $u_m_r_result=mysql_query($u_m_r);  //更新用户帐变记录 
				   $u_o = "update ssc_members set coin = coin+'$rechrageAmount' where uid =$uid";
				   $u_o_result=mysql_query($u_o);  //更新用户表余额
				   exit('ok');
				}else{
				   exit('no');
				}
		
	}else{
		// 签名验证失败
		echo "验证签名失败";
		return false;
	}
?>