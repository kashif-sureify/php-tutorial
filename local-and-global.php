<?php

$name = "aman";
function getName()
{
    $name = "kashif";
    echo "local var : $name <br />";

    global $name;
    echo "global var : $name";

    $name = "raza";
}

getName();

echo "<br/> outside the function: " . $name;
echo "<br/> after update in outside the function: " . $name;


function anotherName($name)
{
    echo "<br/> calling using parameter: " . $name;
}

anotherName($name);

echo "<br/>";

$username = "irfan";

function test()
{
    $username = "nadim";
    echo "outer test function: $username";

    function innerTest()
    {
        $username = "farhan";
        echo "inner test function: $username";

        global $username;
        echo "<br/> inner test function global var: $username";
    }
}

test();
echo "<br/>";

innerTest();
