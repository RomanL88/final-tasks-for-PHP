<?php
require('blueFlame.php');
require('redFlame.php');
require('classes.php');
require('forge.php');
require('smoke.php');

$piano = new Piano;

$life = new Life;

$aSoreHead = new aSoreHead;

$item = [$piano, $life, $aSoreHead];

$random = rand(0, 2);

$randItem = $item[$random];

$forge = new Forge;

//$randItem->burnWith($randFlame);

$forge->burn($randItem);
//вызываю пламя рандомного предмета
//должен передать рандомное пламя
//$randItem->burnWith();

//var_dump($forge->burn($randItem));
