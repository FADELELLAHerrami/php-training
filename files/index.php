<?php 
    // $names = readfile('context.txt');
    // echo $names;
    $file = "context.txt";

    if(file_exists($file)){
        //$handle = fopen($file,'r+');// read and write
        $handle = fopen($file,"a+");// read and write (position in the end)
        // echo fread($handle,filesize($file)/2);
        // read one line
        // echo fgets($handle);
        // 
        // while(!feof($handle)){
        //     echo fgets($handle);
        // }
        //
        // get one charactere
        // echo fgetc($handle);
        fwrite($handle,"\n LAHOUCINE ERRAMI");
        echo fread($handle, filesize($file));
        // echo readfile($file);
        // //
        // echo filesize($file);
        // //
        // echo realpath($file);
        // //
        // copy($file,'data.txt');
        //
        // rename('data.txt','my_file.txt');
        // delete file
        // unlink("my_file.txt");
        fclose($handle);
    }else echo "file doesn't exist";
?>