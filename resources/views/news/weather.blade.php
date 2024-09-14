<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('welcomelayout.navbar_styleandhead')
    <!-- Add Directeur RH content here -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        line-height: 1.6;
        margin: 0;
        padding-top: 60px;
        background: #f5f5f5;
        color: #333;
    }
    header {
        background: linear-gradient(135deg, #c2185b, #d32f2f);
        color: #fff;
        padding: 30px 20px;
        text-align: center;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        border-bottom: 6px solid #fff;
        border-radius: 0 0 20px 20px;
    }
    header h1 {
        margin: 0;
        font-size: 3em;
        color: #fff;
    }
    .container {
        width: 90%;
        max-width: 1000px;
        margin: 40px auto;
        padding: 40px;
        background: #fff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        line-height: 1.8;
        border-left: 5px solid #a32f6d;; /* Red left border */
    }
    .container p {
        margin-bottom: 20px;
        text-align: justify;
        color: #666;
    }
    .google-translate {
        margin-bottom: 20px;
        text-align: center;
    }
    @media (max-width: 768px) {
        header {
            padding: 20px 15px;
        }
        header h1 {
            font-size: 2em;
        }
        .container {
            width: 95%;
        }
    }
</style>
</head>
<body>
    @include('welcomelayout.navbar')
    <div class="container">
        <h1>Météo Locale pour {{ $weather['location']['name'] ?? 'inconnue' }}</h1>

        @if(isset($weather))
            <p>Ville: {{ $weather['location']['name'] }}, {{ $weather['location']['country'] }}</p>
            <p>Température: {{ $weather['current']['temperature'] }} °C</p>
            <p>Conditions: {{ $weather['current']['weather_descriptions'][0] }}</p>
            <p>Vent: {{ $weather['current']['wind_speed'] }} km/h, Direction: {{ $weather['current']['wind_dir'] }}</p>
            <p>Humidité: {{ $weather['current']['humidity'] }}%</p>
            <p>Couverture nuageuse: {{ $weather['current']['cloudcover'] }}%</p>
            <p>Heure d'observation: {{ $weather['current']['observation_time'] }}</p>
            <p>
                <img src="{{ $weather['current']['weather_icons'][0] }}" alt="Weather icon">
            </p>
        @elseif(isset($error))
            <p>{{ $error }}</p>
        @else
            <p>Aucune donnée météo disponible.</p>
        @endif
    </div>
</body>

