<?php

include "PHP\Structure\Registry\Registry.php";

use PHP\Structure\Registry\Registry;
use PHP\Structure\Registry\Plus;
use PHP\Structure\Registry\Minus;


Registry::registry()->setClass('Plus',new Plus);

Registry::registry()->setClass('Minus',new Minus);



Registry::registry()->getClass('Plus')->plus(3,3);

Registry::registry()->getClass('Plus')->plus(13,3);

Registry::registry()->getClass('Plus')->plus(23,3);

Registry::registry()->getClass('Plus')->plus(33,3);

Registry::registry()->getClass('Plus')->plus(33,3);

Registry::registry()->getClass('Minus')->minus(33,3);


