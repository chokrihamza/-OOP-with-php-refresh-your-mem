<?php
$var = 10;
$ref1 = &$var;
$ref2 = &$ref1;
echo $ref1;
$ref2 = 1;
//echo $ref1;
echo $var;
echo $ref2;