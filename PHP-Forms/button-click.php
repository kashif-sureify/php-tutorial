<!DOCTYPE html>
<html lang="en">

<head>
    <title>Call php function</title>
</head>

<body>
    <form action="" method="get">
        <button name="buttons" value="btn1">Call function</button>
    </form>
</body>

</html>

<?php
if (isset($_REQUEST['buttons'])) {
    btn_click_test();
}

function btn_click_test()
{
    echo "button click called";
}
