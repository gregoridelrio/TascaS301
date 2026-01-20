<?php

require_once 'TurnOnOff.php';
require_once 'Heat.php';

class ElectricHeater implements TurnOnOff, Heat
{
  public function turnOn(): void
  {
    echo "Heater on\n";
  }

  public function turnOff(): void
  {
    echo "Heater off\n";
  }

  public function heat(): void
  {
    echo "Heating the room\n";
  }
}
