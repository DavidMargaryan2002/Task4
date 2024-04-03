<?php
class WeatherController
{
    public function fetchWeatherData()
    {
        function getDataFromAPI($url)
        {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["button"])) {
            $weatherApiKey = '9b2ea56752e8a06a6cd0225bf3542eb0';
            $city = $_POST['city'];

            $weatherUrl = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$weatherApiKey&units=metric";

            $weatherData = json_decode(getDataFromAPI($weatherUrl), true);

            $weather = isset($weatherData['weather'][0]['description']) ? $weatherData['weather'][0]['description'] : 'Unknown';
            $temperature = isset($weatherData['main']['temp']) ? $weatherData['main']['temp'] : 'Unknown';
            $windSpeed = isset($weatherData['wind']['speed']) ? $weatherData['wind']['speed'] : 'Unknown';
            include 'View/addCity.php';
            include 'View/View.php';
        }
    }
    public function addCity()
    {
        include 'View/addCity.php';
    }
}


