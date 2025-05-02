<?php

$userDetails = [
    [1, "Kashif", "kashif@test.com"],
    [2, "aman", "aman@test.com"],
    [3, "irfan", "irfan@test.com"],
    [4, "nadim", "nadim@test.com"],
    [5, "sandeep", "sandeep@test.com"],
];

echo "<table border=1>";
for ($i = 0; $i < count($userDetails); $i++) {
    echo "<tr>";

    for ($j = 0; $j < count($userDetails[$i]); $j++) {
        echo "<td>";
        echo $userDetails[$i][$j];
        echo "<br/>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
