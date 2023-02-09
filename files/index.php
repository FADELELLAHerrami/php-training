<?php 
    // $names = readfile('context.txt');
    // echo $names;
    $file = "context.txt";
    if(file_exists($file)){
        echo readfile($file);
        //
        echo filesize($file);
        //
        echo realpath($file);
        //
        // copy($file,'data.txt');
        //
        // rename('data.txt','my_file.txt');
        // delete file
        unlink("my_file.txt");
    }else echo "file doesn't exist";
?>