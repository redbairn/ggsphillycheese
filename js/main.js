// Contacts Page Jscript
// Google Maps

function initMap() {

    var markers = [];

    // Create a custom marker icon.

    var image = {
        url: "./img/locationicon.png",
        scaledSize: new google.maps.Size(25, 25)
    };
    //locationicon
    //./img/GGs_transparent.png"

    // Create an array of locations, all coordinates are  general ones from Google Maps.

    var locations = [
        ["0", "<div style='float:left; background-color:#f28530;'><img src='./img/locationicon.png'></div><div style='float:right; padding: 10px;'><b>Address/Time</b><br/><b>Central Park,</b><br/>Sandyford<br/><i>Wednesday 11am-2pm</i></div>", image, 53.270239, -6.203806, "Wednesday"],
        ["1", "<div style='float:left'><img src='./img/locationicon.png'></div><div style='float:right; padding: 10px;'><b>Address/Time</b><br/><b>Merrion Square,</b><br/>Dublin 4<br/><i>Thursday 11am-3pm</i></div>", image, 53.339638, -6.249067, "Thursday"],
        ["2", "<div style='float:left'><img src='./img/locationicon.png'></div><div style='float:right; padding: 10px;'><b>Address/Time</b><br/><b>Clontarf Red Stables,</b><br/>Dublin 3<br/><i>Saturday 10am-4pm</i></div>", image, 53.369157, -6.175849 , "Saturday"],
        ["3", "<div style='float:left'><img src='./img/locationicon.png'></div><div style='float:right; padding: 10px;'><b>Address/Time</b><br/><b>Herbert Park</b><br/>Dublin 6<br/><i>Sunday 10am-4pm</i></div>", image,53.327458, -6.235408,  "Sunday"]
    ];

    // Create a map.
    var map = new google.maps.Map(document.getElementById("map"), {
        //dublin - 53.347861, -6.259329
        // Set up options and styles for map.
        center: {
            lat: 53.347861,
            lng: -6.259329
        },
        zoom: 11,
        mapTypeControl: false, // Disable Map & Satellite Views.
        streetViewControl: false, // Disable Street View.

    });

    // Loop through length of locations.

    for (var i = 0; i < locations.length; i++) {
        addMarker(locations[i]);
    }

    // Create marker(s).

    function addMarker(properties) {
        var title = properties[1];
        var content = properties[1];
        var icon = properties[2];
        var position = new google.maps.LatLng(properties[3], properties[4]);
        var category = properties[5];

        // Set up info window when marker is clicked.

        var infoWindow = new google.maps.InfoWindow({
            content: "This is content"
        });



        var marker = new google.maps.Marker({
            map: map,
            title: title,
            icon: icon,
            position: position,
            category: category,
            infowindow: infoWindow
        });
        markers.push(marker);


        // Check for icon property.

        if (properties.icon) {
            // Set up icon image.
            marker.setIcon(properties.icon);
        }

        // Check for content property.

        google.maps.event.addListener(marker, "click", (function(marker, content) {
            return function() {
                infoWindow.setContent(content);
                infoWindow.open(map, marker);
                map.panTo(this.getPosition());
                map.setZoom(11); // Revert back to zoomed view when marker is clicked.
                closeAllInfoWindows(map);
                this.infowindow.open(map, this);
            }
        })(marker, content));
    }

    // Filter locations by category selected from dropdown menu. 

    filterLocations = function(category) {
        for (var i = 0; i < locations.length; i++) {
            properties = markers[i];

            if (properties.category == category || category.length === 0) {
                properties.setVisible(true);
                closeAllInfoWindows(map); // Hide all info windows when selection from dropdown menu changes.
            } else {
                properties.setVisible(false);
            }
        }
    }

        //Resize Function
        google.maps.event.addDomListener(window, "resize", function() {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
    
    // Close all info windows and open only one that corresponds to when marker is clicked.

    function closeAllInfoWindows(map) {
        markers.forEach(function(marker) {
            marker.infowindow.close(map, marker);
        });
    

    }
}