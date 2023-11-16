<?php

include "PHP\Fundamental\ImmutableObject.php";

$obj = new ConstPoint(444);

$obj2 = $obj->setPoint(111);

echo $obj->getPoint().'<br>';
echo $obj2->getPoint();
