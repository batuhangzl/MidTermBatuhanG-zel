
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>welcome</p>

    <?php
require "Automobile.php";

$licencePlate="34ayt123";
$brand="ford";
$model="mustang";
$modelYear="2020";
$color="red";

$auto1=new Automobile($licencePlate,$brand,$model,$modelYear,$color);

?>
<form method="GET">

    <input type="submit">
</form>
<pre>
$_GET:
<?php
print_r($_GET);
?>

<pre>
$_POST
<?php
print_r($_POST);
</body>
</html>