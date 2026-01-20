<?php

require_once "AthletesData.php";
require_once "EventsData.php";
require_once "Printer.php";
require_once "ResultsData.php";

$athletesData = [
  ['name' => 'Usain Bolt', 'country' => 'Jamaica'],
  ['name' => 'Michael Phelps', 'country' => 'USA']
];

$eventsData = [
  ['event' => '100m Sprint', 'date' => '2024-08-01'],
  ['event' => 'Swimming', 'date' => '2024-08-02']
];

$resultsData = [
  ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
  ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
];

$athleteDataProcess = new AthletesData();
$eventsDataProcess = new EventsData();
$resultsDataProcess = new ResultsData();
$printer = new Printer();

$athleteDataProcess->processAthletesData($athletesData);
$eventsDataProcess->processEventsData($eventsData);
$resultsDataProcess->processResultsData($resultsData);

$printer->print(
  $eventsDataProcess->getEvents(),
  $resultsDataProcess->getResults(),
  $athleteDataProcess->getAthletes()
);
