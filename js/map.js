function initialize() {
    var latlng = new google.maps.LatLng(50.436322,30.5165669);
    var settings = {
        zoom: 17,
        center: latlng,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles:[{"featureType":"administrative","elementType":"all","stylers":[{"color":"#140505"},{"visibility":"simplified"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"simplified"},{"color":"#e8e8e8"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#747474"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#dfdfdf"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#ededed"},{"visibility":"on"}]}]
    };  
    var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
// Marker 1 
    var PositionMarker1 = new google.maps.LatLng(50.436322, 30.5165669);
    var Marker1 = new google.maps.Marker({
        position: PositionMarker1,
        map: map
    });
// Resize   
    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center); 
});
}
