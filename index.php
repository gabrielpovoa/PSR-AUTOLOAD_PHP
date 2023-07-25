<?php
require('autoload.php');

$m = new BasicMath(0);
echo "VERSION: ".BasicMath::VERSION. "<br>";
echo "RESULTADO: ". $m->sum(23,2). "<br>";
echo "<hr/>";

$name = "joao gabriel";
$interpolate = new NameFormatter($name);
$formattedName = $interpolate->interpolateName();

echo "ORGINAL NAME: ".$name."<br>";
echo "FORMATTED NAME: ".$formattedName."<br>";