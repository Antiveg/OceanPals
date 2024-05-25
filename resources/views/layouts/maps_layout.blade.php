<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/oceanpals-logo.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC4uvj9fFdWhDTi9qo-0zMQuj_odeEUFE&libraries=places"></script>
    <title>OceanPals | {{ $title }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        #map {
          height: 400px;
          width: 100%;
        }
      </style>
</head>
<body class="w-full">
    @include('/partials/navbar')

    @yield('container')

    @include('/partials/footer')

    <script>
        // Initialize Google Maps
        function initMap() {
          var input = document.getElementById('location');
          var autocomplete = new google.maps.places.Autocomplete(input);
        }
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC4uvj9fFdWhDTi9qo-0zMQuj_odeEUFE&libraries=places&callback=initMap"></script>
</body>
</html>
