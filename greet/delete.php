<?php 
	$num=$_GET['num'];
	require "../lib/dbconn.php";
	//삭제쿼리문
	$sql="DELETE FROM greet WHERE num='$num'";
	mysqli_query($conn,$sql);
	mysqli_close($conn);
	//목록보기로 이동
	echo ("
		<script>
		location.href='list.php';
		</script>
		");






 ?>