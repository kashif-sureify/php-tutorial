<?php

class CountrySale
{

    static public $totalSale = 5000;


    function getTotalSale()
    {
        // echo self::$totalSale; // does not overide for city
        echo static::$totalSale;   // late static binding

    }

    function getAreaName()
    {

        // self::areaName() // does not overide for city
        static::areaName(); // late static binding
    }

    static function areaName()
    {
        echo "India";
    }
}

class CitySale extends CountrySale
{

    static public $totalSale = 500;



    static function areaName()
    {
        echo "HYD";
    }
}

$city = new CitySale();

$city->getTotalSale();
$city->getAreaName();

$country = new CountrySale();

$country->getTotalSale();
$country->getAreaName();
// directly calling bcz of static keyword
$city->areaName();
$country->areaName();
