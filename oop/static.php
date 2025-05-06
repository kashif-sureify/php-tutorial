<?php

class Honda
{

    static public $country = "Japan";

    static function company()
    {
        echo "Honda";
    }
}

Honda::company();
echo "<br/>";
echo Honda::$country;
