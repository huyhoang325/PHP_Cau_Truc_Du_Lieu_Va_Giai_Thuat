<?php
include "ArrayList.php";
$listInteger = new MyList();

$listInteger->add(1);

$listInteger->add(2);

$listInteger->add(3);

echo $listInteger->indexOf(1)."<br>";

echo $listInteger->minValue()."<br>";

print_r($listInteger->clone());