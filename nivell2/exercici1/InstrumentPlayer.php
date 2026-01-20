<?php
class InstrumentPlayer
{
  public function play(Instrument $instrument): void
  {
    $instrument->play();
  }
}

$player = new InstrumentPlayer();
$player->play(new Guitar());
$player->play(new Drums());
$player->play(new Piano());
