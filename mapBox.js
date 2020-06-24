
var x = document.getElementById("map");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    currentLong = position.coords.longitude;
    currentLatt = position.coords.latitude;


//#######################################################
//#######################################################

    mapboxgl.accessToken = 'pk.eyJ1IjoidGhlcGFyYWRveDIwIiwiYSI6ImNrYnBydjFjczJmMnAyenF2bDQ1eHZwMnoifQ.OxVufsq41KKHkFlWxDpVUQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [currentLong , currentLatt], // starting position [lng, lat]
        zoom: 12
    });
//new Marker(options: Object?, legacyOptions: Options?)
    var marker = new mapboxgl.Marker()
        .setLngLat([ currentLong , currentLatt])
        .addTo(map);
}
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}

