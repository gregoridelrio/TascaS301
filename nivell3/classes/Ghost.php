<?php

include('Character.php');
include('MoveAction.php');

class Ghost extends Character implements MoveAction
{
  public function move(): void
  {
    echo "The ghost floats silently.\n";
  }
}
