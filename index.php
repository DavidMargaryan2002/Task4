<?php
include 'Controller/WeatherController.php';
$action = $_GET['action'] ?? null;
switch ($action) {
    case 'get':
        $weatherController = new WeatherController();
        $weatherController->fetchWeatherData();
        break;
    default:
        $weatherController = new WeatherController();
        $weatherController->addCity();
        break;
}

