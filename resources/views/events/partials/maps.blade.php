<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC4uvj9fFdWhDTi9qo-0zMQuj_odeEUFE&callback=initMap" async defer></script>

<script>
    function initMap() {
        // The location
        const location = { lat: -25.344, lng: 131.036 }; // Example coordinates
        // The map, centered at location
        const map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: location
        });
        // The marker, positioned at location
        const marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>