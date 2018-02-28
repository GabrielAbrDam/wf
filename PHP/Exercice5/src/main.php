<?php

require_once __DIR__.'/DimensionalMath/Distance/DistanceCalculation.php';
require_once __DIR__.'/DimensionalMath/Vector/AngleCalculation.php';

use function DimensionalMath\Distance\threeDimensionDistance;
use function DimensionalMath\Vector\getVectorAngle as coucou;


$distance = threeDimensionDistance(
    [1, 1, 1],
    [2, 2, 2]
);



