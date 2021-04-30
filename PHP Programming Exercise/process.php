<?php

include 'Calculate.php';

$phpex1= new calculate;

$phpex1->triangle($_POST ['1side'],$_POST ['2side']);

$phpex2 = new calculate;
$phpex2->binaryrepresentation($_POST ['binary']);

$phpex3 = new calculate;
$phpex3->pathparts($_POST ['1side'],$_POST ['2side']);

$phpex4 = new calculate;
$phpex4->sastrynumber($_POST ['number']);