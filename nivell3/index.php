<?php
include_once('classes/Character.php');
include_once('classes/Ghost.php');
include_once('classes/Warrior.php');

function doCombat(AttackAction $character)
{
  $character->attack();
}

function doMove(Character $character)
{
  $character->move();
}

$enemy = new Ghost();
$warrior = new Warrior();

doMove($enemy);
doMove($warrior);
doCombat($warrior);
