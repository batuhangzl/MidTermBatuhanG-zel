
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

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

?>



</body>
</html>