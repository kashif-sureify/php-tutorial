<?php
const data="Kashif";
// data="aman";  error bcz you can't reinitialize it

echo data;

define("DATA","Aman");

echo DATA;
?>

<?php

// echo value; hoisting not allowed

define("value","Khan");

echo value;


?>