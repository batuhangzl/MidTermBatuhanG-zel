<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Automobile {

public $licencePlate;
public $brand;
public $model;
public $modelYear;
public $color;

function construct($licencePlate, $brand, $model, $modelYear, $color){
    $this->licencePlate=$licencePlate;
    $this->brand = $brand;
    $this->model = $model;
    $this->modelYear = $modelYear;
    $this->color = $color;

}

function toString() {
    return $this->licencePlate . " :" .$this->brand . " " . $this->model. " " . $this->modelYear. " " . $this->color;
}

}
</body>
</html>