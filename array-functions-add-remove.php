<?php

$users = ["Kashif", "Irfan", "Sandeep", "Ghouse"];
// single element add
array_push($users,"Farhan");

// multiple element add
array_push($users,"Nadim","Samee","Shakir");

// single element remove
array_pop($users);

// multiple element remove 
// for last in negativ 
// for first in postive
array_splice($users,-2);

print_r($users); 
