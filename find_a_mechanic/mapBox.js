mapboxgl.accessToken = 'pk.eyJ1IjoidGhlcGFyYWRveDIwIiwiYSI6ImNrYnBydjFjczJmMnAyenF2bDQ1eHZwMnoifQ.OxVufsq41KKHkFlWxDpVUQ';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [36.8219, -1.2921], // starting position [lng, lat]
    zoom: 12
});
//new Marker(options: Object?, legacyOptions: Options?)
var marker = new mapboxgl.Marker()
    .setLngLat([36.8219, -1.2921])
    .addTo(map);
var marker = new mapboxgl.Marker()
    .setLngLat([36.0800, -0.3031])
    .addTo(map);
