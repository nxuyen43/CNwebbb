<?php 
	if(isset($_GET['delete'])){
		$code = $_GET['delete'];
		$conn = mysqli_connect('localhost','root','','Finalweb');
		if (!$conn) {
			die("ERROR".mysqli_connect_error());
		}else{
			$sql = "delete from Post where code='".$code."'";
			$result = mysqli_query($conn, $sql);
			if ($result == 0) {
				echo 'Xóa bài viết '.$code.' thất bại, vui lòng thử lại';
			}else{
				echo 'Đã xóa bài viết '.$code;
			}
		}
		mysqli_close($conn);
	}
 ?>