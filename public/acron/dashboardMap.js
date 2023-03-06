var lat = document.getElementById('lat').value;
var lng = document.getElementById('lng').value;
var address = document.getElementById('address').value;
var date_time = document.getElementById('date_time').value;
console.log('lat: ', lat);
console.log('lng: ', lng);
var map = L.map('map', {
    // Set latitude and longitude of the map center (required)
    center: [lat, lng],
    // Set the initial zoom level, values 0-18, where 0 is most zoomed-out (required)
    zoom: 22
});
// console.log('center: ', center);
console.log('map: ', map);


// Create a Tile Layer and add it to the map
var tiles = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var marker = L.marker(
    [lat, lng],

    {
        draggable: true,
        title: "",
        opacity: 0.75
    });
console.log('marker: ', marker);

marker.addTo(map).bindPopup(
    "<p1><b>"+date_time+"</b><br>"+address+".</p1>"
).openPopup();
