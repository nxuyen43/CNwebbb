<?php 
	session_start();

	if(isset($_POST['upCode']) and
    isset($_SESSION['iduser']) and 
    isset($_POST['upTitle']) and
    isset($_POST['upDate']) and
    isset($_POST['upContent']) ){
		$code = $_POST['upCode'];
    	$iduser = $_SESSION['iduser'];
    	$title = $_POST['upTitle'];
    	$date = $_POST['upDate'];
    	$content = $_POST['upContent'];
    	$conn = mysqli_connect('localhost','root','123','Finalweb');
    	if (!$conn) {
    		die("ERROR".mysqli_connect_error());
    	}else{
    		$sql = "update Post set iduser ='".$iduser."', date='".$date."', title= N'".$title."', content= N'".$content."' where code='".$code."'";
    		$result = mysqli_query($conn, $sql);
            if ($result == 0 ) {
                echo 'Sửa bài viết thất bại, vui lòng thử lại';
            }else{
                echo 'Sửa bài viết thành công';
            }
    	}
    	mysqli_close($conn);
    }
 ?>
