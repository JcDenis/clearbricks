<?php

use atoum\atoum\reports\coverage;
use atoum\atoum\writers\std;

$script->addDefaultReport();

$coverage = new coverage\html();
$coverage->addWriter(new std\out());
$coverage->setOutPutDirectory(__DIR__ . '/coverage/html');
$runner->addReport($coverage);
