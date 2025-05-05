<?php

// call the file
// include("./index.php"); 

for ($i=0; $i < 10; $i++) { 
    // include the file only once inspite of calling many times
    // include_once("./index.php"); 
}


// call the file
// require("./index1.php"); 

for ($i=0; $i < 10; $i++) { 
    // include the file only once inspite of calling many times
    // require_once("./index.php"); 
}


// require, require_once vs include, include_once 
// file the file does not exist then include and include_once will give warning, which can be hide 
// while require and require_once gives fatal error if file does not exist and it cannot be hide