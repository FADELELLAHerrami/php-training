<?php 
    echo "upload file";
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $source = $_FILES['avatar']['tmp_name'];
        $destination = 'image/'. $_FILES['avatar']['name'];
    
        move_uploaded_file($source,$destination);
    }

?>