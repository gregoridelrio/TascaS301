<?php
class EventsData
{
  private $events = [];

  public function processEventsData($eventsData)
  {
    foreach ($eventsData as $event) {
      $this->events[] = ['event' => $event['event'], 'date' => $event['date']];
    }
  }

  public function getEvents(): array
  {
    return $this->events;
  }
}
