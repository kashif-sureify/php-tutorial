<?php
$user = ["name" => "kashif", "age" => 23, "city" => "jsr"];
$user_json = json_encode($user);
echo $user_json;

echo "<br/>";

$user_Array = json_decode($user_json, true);
print_r($user_Array);

echo "<br/>";


$data = '{"name":"kashif","age":23,"city":"jsr"}';
$dataArray = json_decode($data, true);

print_r($dataArray);
