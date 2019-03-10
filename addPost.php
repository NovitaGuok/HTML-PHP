<?php
	require('db.php');
    include("auth.php");
    
    //if(isset($_GET['publish'])){
        $title = $_POST['title'];
		$posting = $_POST['posting'];
        $username = $_SESSION['username'];
        $filename = $_FILES['file']['name'];
        $file = $_FILES['file'];
        if(move_uploaded_file($file['tmp_name'],"uploads/".$_FILES['file']['name'])){
            $sql = "INSERT INTO adminpost(Title, Author, postDate, Publish, file) VALUES ('$title','$username',SYSDATE(),'$posting','$filename')";
            $res = mysqli_query($con, $sql);
        }
        
                
        if($res){
            header("Location: dashboard.php");
            exit();
        }
        // } else {
        //     header("Location: dashboard.php");
        //     exit();
        // }
        mysqli_close($con);
    //}
?>