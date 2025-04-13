<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WeatherApp</title>

  <!-- Meta tags -->
  <meta name="title" content="WeatherApp">
  <meta name="description" content="WeatherApp is a simple weather application that provides current weather information.">

  <!-- Favicon -->
  <link rel="shortcut icon" sizes="180x180" href="{{ asset('assets/images/favicon.svg') }}" type="image/svg+xml">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
  <!-- Add to <head> -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />


  <!-- Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- JavaScript Modules -->
  <script type="module" src="{{ asset('assets/js/app.js') }}"></script>
  <script type="module" src="{{ asset('assets/js/route.js') }}"></script>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container">
      <a href="#" class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" width="364" height="58" alt="logo">
      </a>

      <div class="search-view" data-search-view>
        <div class="search-wrapper">
          <input type="search" name="search" placeholder="Search city..." autocomplete="off" class="search-field" data-search-field>
          <span class="m-icon leading-icon">search</span>
          <button class="icon-btn leading-icon has-state" aria-label="close search" data-search-toggler>
            <span class="m-icon">arrow_back</span>
          </button>
        </div>

        <div class="search-result" data-search-result></div>
      </div>

      <div class="header-actions">
        <button class="icon-btn has-state" aria-label="open search" data-serach-toggler>
          <span class="m-icon icon">search</span>
        </button>

        <a href="#/current-location" class="btn-primary has-state transparent-bg" data-current-location-btn>
          <span class="m-icon">my_location</span>
          <span class="span">Current Location</span>
        </a>
      </div>
    </div>
  </header>

  <!-- Background Video -->
  <video id="weather-video" autoplay muted loop playsinline>
    <source src="{{ asset('assets/videos/clear.mp4') }}" type="video/mp4">
  </video>
  <div class="video-overlay"></div>

  <!-- Main Content -->
  <main>
    <article class="container" data-container>
      <div class="content-left">
        <section class="section current-weather" aria-label="current weather" data-current-weather></section>
        <section class="section forecast" aria-labelledby="forecast-label" data-5-day-forecast></section>
      </div>

      <div class="content-right">
        <section class="section highlights" aria-labelledby="highlights-label" data-highlights></section>
        <section class="section hourly-forecast" aria-label="hourly forecast" data-hourly-forecast></section>

        <footer class="footer">
          <p class="body-3">© 2025 codewithvinoth. All Rights Reserved.</p>
          <p class="body-3">
            Powered by <a href="https://openweathermap.org/api" target="_blank" rel="noopener">OpenWeather</a>
            <img src="{{ asset('assets/images/openweather.png') }}" width="150" height="30" loading="lazy" alt="OpenWeather">
          </p>
        </footer>
      </div>

      <div class="loading" data-loading></div>
    </article>
  </main>

  <!-- 404 Section -->
  <section class="error-content" data-error-content>
    <h2 class="heading">404</h2>
    <p class="body-1">Page not found!</p>
    <a href="#/weather?lat=51.5073219&lon=0.1276474" class="btn-primary">
      <span class="span">GO Home</span>
    </a>
  </section>
</body>
</html>
