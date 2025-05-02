<?php
$h2_color = "black";
echo "<h1 style='color:green'>php with html </h1>";
echo "<h3 style='color:blue'>php with html </h3>";
?>

<?php
$name = "Kashif Anwar";
echo "<h1 style='color:orange'>My name is $name </h1>";
?>

<h1 style="color:red">
    My real name is <?php echo $name ?>
</h1>

<h2 style="color:<?php echo $h2_color; ?>"> <?php echo "this is h2 tag" ?> </h2>
<h2 style="color:<?php echo $h2_color; ?>"> <?php echo "this is h2 tag" ?> </h2>
<h2 style="color:<?php echo $h2_color; ?>"> <?php echo "this is h2 tag" ?> </h2>