<?php

class ConstructorDemo
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function displayName()
    {
        echo $this->name;
    }
}

$cd = new ConstructorDemo("kashif");

$cd->displayName();
