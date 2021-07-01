<?php
	
	include('connect.php');
	
	
	$acc = $_POST['acc'];
	$pwd = $_POST['pwd'];
	
	$sql = 'SELECT * FROM `user`';
	$run = mysqli_query($con,$sql);
	
	while($row = mysqli_fetch_Assoc($run)){
		
		if($row['acc'] != $acc){
			$msg = 'WA';
		}else{
			if($row['pwd'] != $pwd){
				$msg = 'WP';
				break;
			}else{
				if($row['auth'] == 'manager'){
					$msg = 'manager';
					$_SESSION['acc'] = $row['acc'];
					break;
				}else{
					$msg = 'member';
					$_SESSION['acc'] = $row['acc'];
					break;
				}
			}
		}
		
	}
	
	Switch($msg){
		case 'WA': 
			$_SESSION['msg'] = '帳號錯誤 wrong account';
			header('location:login_page.php');
			break;
			
		case 'WP': 
			$_SESSION['msg'] = '密碼錯誤 wrong password';
			header('location:login_page.php');
			break;
		
		case 'manager': 
			$_SESSION['msg'] = '';
			header('location:manager.php');
			break;
			
		case 'member': 
			$_SESSION['msg'] = '';
			header('location:member.php');
			break;
	}?>