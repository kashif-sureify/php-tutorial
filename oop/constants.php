<?php

class Constants
{
    const collegeName = "RVSCET";

    function getCollegeName()
    {

        // two ways to access constants in class
        echo Constants::collegeName;
        echo "<br/>";
        echo self::collegeName;
    }
}

$clg = new Constants();

$clg->getCollegeName();
