<?php
include "CircleComparator.php";

$circleOne =new Circle("CircleOne", 6);
$circleTwo =new Circle("CircleTwo", 6);

$circleComparator = new CircleComparator();
echo $circleComparator->compare($circleOne,$circleTwo);