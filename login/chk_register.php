<?php
	session_start();
	include_once'define.php';
	include_once'../adodb/adodb.inc.php';
	$conn = ADONewConnection('mysql');
	$conn->Connect(HOST,SQL_USER,SQL_PWD,DATABASE_MEMBER) or die( 'error');
	$conn->Execute('set names gb2312');
	$insert['user'] = $_POST['user'];
	$insert['pwd'] = md5($_POST['pwd2']);
	$insert['nickname'] = $_POST['nickname'];
	$insert['sex'] = $_POST['sex'];
	if(empty($_FILES)){
		$insert['headpic'] = '';
	}else{
		$size = getimagesize($_FILES['head']['tmp_name']);
		if(($size[0]>0 &&$size[0]<=60) && ($size[1]>0 &&$size[1]<=60)){
			if(!is_dir('head_pic/' . $insert['user']))
				mkdir('head_pic/' . $insert['user']);
			$file_path = 'head_pic/' . $insert['user'] . '/' . $_FILES['head']['name'];
			move_uploaded_file($_FILES['head']['tmp_name'],$file_path);
			$insert['headpic'] = $file_path;
		}elseif($size[0]>60 || $size[1]>60){
			$insert['headpic']='';
			echo'<script>alert("头像上传失败，系统会使用默认头像，单击确定，注册过程将会继续");</script>';
		}else{
			$insert['headpic']='';
		}
	}
	$insert['email'] = $_POST['email'] . ':' . $_POST['email_p'];
	$insert['question'] = $_POST['question'];
	$insert['answer'] = $_POST['answer'];
	$insert['realname'] = $_POST['realname'] . ':' . $_POST['realname_p'];
	if($_POST['selectyear'] !=0 && $_POST['selectmonth'] !=0 && $_POST['selectday'] !=0)
		$insert['birthday'] = $_POST['selectyear'] . '-' . $_POST['selectmonth'] . '-' . $_POST['selectday'];
	if($_POST['select_area3'] != 0)
		$insert['city'] = $_POST['select_area3'];
	$insert['job'] = $_POST['work'];
	$insert['school'] = $_POST['school'];
	if($_POST['runyear'] !=0 && $_POST['runmonth'] !=0 && $_POST['runday'] !=0)
		$insert['runday'] = $_POST['runyear'] . '-' . $_POST['runmonth'] . '-' . $_POST['runday'];
	$insert['stature'] = $_POST['stature'];
	$insert['weight'] = $_POST['weight'];
	$insert['qq'] = $_POST['qq'] . ':' . $_POST['qq_p'];
	$insert['tel'] = $_POST['tel'] . ':' . $_POST['tel_p'];
	$insert['sign'] = $_POST['sign'];
	$rst = $conn->Execute('select * from tb_member where id=-1');
	$sql = $conn->GetInsertSQL($rst,$insert);
	$conn->Execute($sql);
	$_SESSION['member'] = $_POST['user'];
	$_SESSION['id'] = $conn->Insert_ID();
	echo'<script>alert("注册成功");window.close();</script>'
?>