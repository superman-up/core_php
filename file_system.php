<?php

if(!file_exists("App")){
    mkdir("App");
}
if(!file_exists("App/Controller"))
    mkdir("App/Controller");

if(!file_exists("App/Model"))
    mkdir("App/model");

if(!file_exists("App/helper"))
    mkdir("App/helper");
   // $file = fopen("App/controller/index.php", "r") or die("unable to open file!");
    if(!file_exists("App/controller/index.php")){
        $file = fopen("App/controller/index.php", "a") or die("unable to open file!");
        echo fwrite($file,"this is my first created file.");
        fclose($file);

    }

    if(!file_exists("App/controller/student.php")){
        $file = fopen("App/model/studtent.php", "a") or die("unable to open file!");

    echo fwrite($file,"this is my modal file.");
    fclose($file);

    }



?>