<?php
session_start();
include '../helper/config.php';

if (isset($_POST['login'])) {
	$username = addslashes(trim($_POST['username']));
	$password	= md5($_POST['password']);

	$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password' ");

	if (mysqli_num_rows($query) == 0) {
		echo "<script>alert('Username atau Password yang Anda masukan salah !!!');document.location.href='../index.php'</script>/n";
	} else {
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']	= $row['username'];
		$_SESSION['email']		= $row['email'];
		$_SESSION['role']  		= $row['role'];

		if ($row['role'] == "2") {
			echo "<script>document.location.href='../admin/admin-dashboard.php'</script>/n";
		} else if ($row['role'] == "1") {
			echo "<script>document.location.href='../guru/guru-dashboard.php'</script>/n";
		} else if ($row['role'] == "0") {
			echo "<script>document.location.href='../user/user-dashboard.php'</script>/n";
		} else {
			echo "<script>document.location.href='index'</script>/n";
		}
	}
}