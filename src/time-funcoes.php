<?php

$data = new DateTime("1997-04-01");
$data->setDate(1992,03,27);

echo $data->format("d/m/Y") . "\n";
