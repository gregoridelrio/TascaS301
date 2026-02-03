<?php

include_once('AttackAction.php');

class Warrior extends Character implements AttackAction
{
  public function move(): void
  {
    echo "The warrior moves forward.\n";
  }
  public function attack(): void
  {
    echo "The warrior attacks with a sword.\n";
  }
}
