<?php
	require('db.php');
    include("auth.php");
    
    //if(isset($_GET['publish'])){
		$id = $_POST['id'];
        $title = $_POST['title'];
		$posting = $_POST['posting'];
        $username = $_SESSION['username'];
        $filename = $_FILES['file']['name'];
        $file = $_FILES['file'];
        if(move_uploaded_file($file['tmp_name'],"uploads/".$_FILES['file']['name'])){
            $sql = "UPDATE adminpost SET Title = '$title', 
			                             Publish = '$posting',
                                         file = '$filename'
                                     WHERE id='$id'";
                                    // print_r($sql);
                                    // die();
             $res = mysqli_query($con, $sql);
        }
        
		//print_r($sql);
		//die();
        
                
        if($res){
			echo "<script language='javascript'>alert('Update Successfully!')</script>";
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: dashboard.php");
            exit();
        }
        mysqli_close($con);
    //}
?>