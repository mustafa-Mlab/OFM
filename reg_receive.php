<?php
session_start();
include 'config.php';

$errflag= 0;
$found = 0;
	if(!empty($_POST['lavel'])){
		$lavel = $_POST['lavel'];
		}
	else{
			$errflag++;
			$_SESSION['err_msg']='select lavel';
			}
	if(!empty($_POST['full_name']))
	{
		$fname =$_POST['full_name']; }
		else{
			$errflag++;
			$_SESSION['err_msg']='Enter Full Name';
			}
        if(!empty($_POST['address'])){
		$address = $_POST['address'];
		}
	else{
			$errflag++;
			$_SESSION['err_msg']='select address';
			}
                        
        if(!empty($_POST['username'])){
		$uname = $_POST['username'];
		}
	else{
			$errflag++;
			$_SESSION['err_msg']='Enter Username';
			}
        if(!empty($_POST['pass'])){
		$pass = $_POST['pass'];
		}
	else{
			$errflag++;
			$_SESSION['err_msg']='Enter Password';
			}
        if(!empty($_POST['con_pass'])){
		$cpass = $_POST['con_pass'];
		}
	else{
			$errflag++;
			$_SESSION['err_msg']='Enter Confirm Password';
			}
        if(!empty($_POST['mobile_no'])){
		$mob = $_POST['mobile_no'];
		}
	else{
			$errflag++;
			$_SESSION['err_msg']='Enter Mobile Number';
			}
        if(!empty($_POST['sec_ques'])){
		$sq = $_POST['sec_ques'];
		}
	else{
			$errflag++;
			$_SESSION['err_msg']='Enter Secrate Question';
			}
        if(!empty($_POST['ans'])){
		$ans = $_POST['ans'];
		}
	else{
			$errflag++;
			$_SESSION['err_msg']='Enter ans';
			}
        if(!empty($_POST['district'])){
		$district = $_POST['district'];
		}
        if(!empty($_POST['subdistrict'])){
		$subdistrict = $_POST['subdistrict'];
		}
        if(!empty($_POST['union'])){
		$union = $_POST['union'];
		}
        if(!empty($_POST['block'])){
		$block = $_POST['block'];
		}
        
//	if(!$errflag >0)
//	{
//		$result = mysql_query("SELECT * FROM login");
//		while($row = mysql_fetch_array($result))
//  			{
//				if(strcmp($uname,$row['name'])==0&& strcmp($pass,$row['password'])==0)
//				{
//					$found++;
//					$id = $row['id'];
//					$name= $row['name'];
//					$r = $row['rights'];
//  				}
//			}
//		if($found ==1)
//		{
//			echo' loggeed in<br />';
//			$_SESSION['Mem_id'] = $id;
//			$_SESSION['Mem_name']=$name;
//			$_SESSION['Rights'] = $r;
//			echo $_SESSION['Mem_id'].'  '.$_SESSION['Mem_name'].'  '.$_SESSION['Rights'];
//						
//		mysql_close($Link);
//		 header("location:index.php?id=home");
//		}
//		else
//		{
//			echo 'login';
//			$_SESSION['err_msg']='username password not match';
//			header("location:login.php");	
//		}
//	
//	}
//	else
//	{
//		echo ' Not Possible ';
//		header("location:login.php");
//	}
//	exit();

?>

