<?php
$fileName = "files/dummy.txt";
$content = "This is a dummy file";
$file = fopen($fileName, "w") or die("unable to create file");
fwrite($file, $content);
fclose($file);
echo "file created";
