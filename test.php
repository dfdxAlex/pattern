<?php

include "PHP\Fundamental\ImmutableInterface.php";

$obj = new PointConst(10);

$obj->setPoint(223);

$obj->setPoint(1223);

echo $obj->getPoint();


