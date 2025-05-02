<?php
$userDetails = ["name" => "Kashif", "age" => 22, "city" => "Jamshedpur"];

foreach ($userDetails as $key => $data) {
    echo $key . " => " . $data;
    echo "<br/>";
}

// method 2

foreach ($userDetails as $key => $data):
    echo $key . " => " . $data;
    echo "<br />";
endforeach;

?>