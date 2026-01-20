<?php

include('classes/Ghost.php');

function doCombat(Character $character)
{
  if ($character instanceof MoveAction) {
    $character->move();
  }

  if ($character instanceof AttackAction) {
    $character->attack();
  }
}

$enemy = new Ghost();
doCombat($enemy);
