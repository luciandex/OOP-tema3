<?php declare (strict_types=1);

include "bootstrap.php";

use Classes\Rectangle;
use Classes\Parallelepiped;


$rectangle = new Rectangle();
var_dump($rectangle);

$rectangle->setDimensions(10, 10);
var_dump($rectangle);
echo "<br>";

$rectangle->getDimensions();
var_dump($rectangle);

echo "<br><br>";

$perimeter = $rectangle->perimeter();
echo "The rectangle PERIMETER is: {$perimeter} cm.";

echo "<br><br>";

$area = $rectangle->area();
echo "The rectangle AREA is: {$area} cm<sup>2</sup>.";

echo "<br><br>";
echo "<hr>";

$parallelepiped = new parallelepiped();
var_dump($parallelepiped);

$parallelepiped->setParallelepipedDimensions(6.8, 3.7, 2.5);
$parallelepiped->getParallelepipedDimensions();
var_dump($parallelepiped);
echo $parallelepiped;

echo "<br><br>";

$volume = $parallelepiped->volume();
echo "The parallelepiped VOLUME is: {$volume} cm<sup>3</sup>.";

echo "<br><br>";

$parallelepipedArea = $parallelepiped->area_parallelepiped();
echo "The PARALLELEPIPED AREA is: {$parallelepipedArea} cm<sup>2</sup>.";

echo "<br><br>";

$parallelepipedDiagonal = $parallelepiped->parallelepipedDiagonal();
echo "The Parallelepiped DIAGONAL is: " . round($parallelepipedDiagonal, 2) . " cm.";

