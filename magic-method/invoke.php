<?php

class User
{
    function __invoke()
    {
        echo "my name is kashif";
    }

    function test()  {
        echo "test function";
    }
}

$user=new User();
$user();
echo "<br>";

$user->test();

// calling object as a function