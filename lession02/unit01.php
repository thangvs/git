<?php
    //xu ly du lieeu trng file
    //mo file
    $pathFile="../public/data/mysql.txt";
    $fopen=fopen($pathFile,'a+');
    if($fopen){
        // echo 'thanhcong';
        $data=fread($fopen,filesize($pathFile));
        // echo $data;
        //ghi du lieu vao file
        fwrite($fopen,'hoc lap trinh');
        echo $data;
        fclose($fopen);
    }
    else{
        echo 'that bai';
    }
?>