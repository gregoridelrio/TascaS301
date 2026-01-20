<?php

require_once 'TurnOnOff.php';
require_once 'Wash.php';

class WashingMachine implements TurnOnOff, Wash
{
  public function turnOn(): void
  {
    echo "Washing machine on\n";
  }

  public function turnOff(): void
  {
    echo "Washing machine off\n";
  }

  public function wash(): void
  {
    echo "Washing clothes\n";
  }
}
