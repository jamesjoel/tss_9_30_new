<?php
mysql_select_db("tss_9", mysql_connect("localhost", "root", ""));
extract($_POST); // $username
session_start();
$obj=mysql_query("SELECT * FROM gmail_user WHERE username='$username'");

$arr=array();
if(mysql_num_rows($obj)==1)
{
	if(isset($password))
	{
		$data=mysql_fetch_assoc($obj);
		if($data['password']==$password)
		{
			$_SESSION['user_logged_in']=true;
			$arr['success']=true;
		}
		else
		{
			$arr['success']=false;
			$arr['error']=3;
		}
	}
	else
	{

		$arr['success']=false;
		$arr['error']=2;	
	}

}
else
{
	$arr['success']=false;
	$arr['error']=1;
}
echo json_encode($arr);
?>