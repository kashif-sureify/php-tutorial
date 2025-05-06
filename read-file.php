 <?php
    $file = "files/abc.txt";
    $myFile = fopen($file, "r") or die("unable to read file");
    echo fread($myFile, filesize($file));
    fclose($myFile);
