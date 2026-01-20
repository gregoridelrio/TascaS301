<?php
class Printer
{
  public function print(array $events, array $results, array $athletes)
  {
    echo "Olympic Games Results:\n";
    foreach ($events as $event) {
      echo "Event: " . $event['event'] . " on " . $event['date'] . "\n";
      foreach ($results as $result) {
        if ($result['event'] === $event['event']) {
          echo "- " . $result['athlete'] . " from " . $result['country'] . " won " . $result['medal'] . "\n";
        }
      }
    }
  }
}
