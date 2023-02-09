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
    }else echo "file doesn't exist";
?>