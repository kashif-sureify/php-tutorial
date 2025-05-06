<?php

class Company
{
    function getName()
    {
        echo "This is Honda company. ";
        return $this;
    }

    function getEmp()
    {
        echo "Company has 3000 employees. ";
        return $this;
    }

    function getTotalOffice()
    {
        echo "They have 200 offices. ";
        return $this;
    }
}

$cmp = new Company();

$cmp->getName()->getEmp()->getTotalOffice();
