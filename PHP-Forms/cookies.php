
<?php

setcookie('fruit', 'Mango. Banana Cherry');
setcookie('color', 'Magenta. Brown Cherry Red');

if (isset($_COOKIE['fruit'])) {
    echo "current fruit is " . $_COOKIE['fruit'];
} else {
    echo "no fruit is set";
}

echo "<br>";

if (isset($_COOKIE['color'])) {
    echo "current fruit is " . $_COOKIE['color'];
} else {
    echo "no color is set";
}
echo "<br>";

print_r($_COOKIE);

?>
