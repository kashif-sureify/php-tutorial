<?php

$users = [
    ["Name" => "Kashif", "Age" => 23, "City" => "hyd"],
    ["name" => "Samee", "age" => 26, "city" => "blr"],
    ["name" => "irfan", "age" => 24, "city" => "dubai"],
    ["name" => "ghouse", "age" => 24, "city" => "jsr"],
    ["name" => "sandeep", "age" => 23, "city" => "ranchi"],
];

echo "<table border=1 cellpadding='5' cellspacing='0'>";

echo "<tr>";
foreach (array_keys($users[0]) as $header) {
    echo "<th>" . $header . "</th>";
}
echo "</tr>";

foreach ($users as $user) {
    echo "<tr>";
    foreach ($user as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "<br/>";
    echo "</tr>";
}
echo "</table>";
