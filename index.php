<?php
	session_start();
	if(empty($_SESSION['id'])){
		echo'<script>location = "login";</script>';
	}else{
		echo'<script>location = "run";</script>';
	}
?>