<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/styles.css">
    <title>Document</title>
</head>
<body>
<div class="parent_div">
    <div class="title_div">
        <h1> Weather in <?= $city ?>  </h1>
    </div>
    <div class="div1"><h2></i><?= $weather ?></h2></div>
    <div class="div1"><h2>The air temperature is currently <?= $temperature ?> C</h2></div>
    <div class="div1"><h2>Wind speed is currently <?= $windSpeed ?> km/h</h2></div>
</div>
</body>
</html>