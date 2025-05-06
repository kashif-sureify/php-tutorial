<?php

trait parentCompany1
{
    function getTotalEmp()
    {
        echo 5000;
    }
}

trait parentCompany2
{
    function getTotalOffice()
    {
        echo 10;
    }
}

class Company
{
    use parentCompany1;
    use parentCompany2;
}

$cmp = new Company();

$cmp->getTotalEmp();
echo "<br/>";
$cmp->getTotalOffice();
