function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: { lat: 41.334765, lng: 19.816504 }
    });
    var marker = new google.maps.Marker({
        position: { lat: 41.3345346, lng: 19.8166097 },
        map: map
    })
    marker.setMap(map);
}