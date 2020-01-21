<?php
  ini_set('display_errors',1);
	session_start();

	$id = $_POST['id'];
	$pw = $_POST['pw'];

	$connect = mysqli_connect('localhost','root','@dmin','web') or die('fail');

	$query = "select * from member where user_id = '$id' and user_pw = '$pw'";

	$result = mysqli_query($connect,$query);

	if ($result->num_rows)
	{
		echo "<script> alert('로그인 성공'); </script>";
    echo "<script> location.href = 'index.html'; </script>";
	}

	else
	{
		echo "<script> alert('로그인 실패'); </script>";
    echo "<script> history.back(); </script>";
	}

?>
