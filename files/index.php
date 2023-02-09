<?php 
    // $names = readfile('context.txt');
    // echo $names;
    // $file = "context.txt";

    // if(file_exists($file)){
        //$handle = fopen($file,'r+');// read and write
        // $handle = fopen($file,"a+");// read and write (position in the end)
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
        // fwrite($handle,"\n LAHOUCINE ERRAMI");
        // echo fread($handle, filesize($file));
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
        // fclose($handle);
    // }else echo "file doesn't exist";

    // create a directoly 
    mkdir('storage');
    // create a file
    touch("storage/index.txt")
    // remove directoly 
    //rmdir('storage');
    // when a directoly isn't empty we can't remove it with rmdir we use unlink() method
?>