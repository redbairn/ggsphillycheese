
//HomePage
function dayOfWeekLocationAdd() {

  var day = new Date();
  var number = day.getDay();
  var time  = day.getHours();
  var text;
 
 if(number==1 ||number==2) { //monday&tuesday
    text="Check us out on Wednesday - Central Park Sandyford: 11am-2pm"
 } else if(number==3) { //wednesday
    text="Check us out In Central Park Sandyford: 11am-2pm"
 } else if(number==4){ //thursday
    text="Check us out In Merrion Square: 11am-3pm"
 } else if(number==5){ //friday
    text="Check us out In Clontarf on Saturday 10am-4pm"
 } else if(number==6){ //saturday
    text="Check us out In Clontarf Red Stables: 10am-4pm"
 } else { //sunday
    text="Check us out In Herbert Park: 10am - 4pm"
 }
//return text;
document.getElementById("advert").innerHTML = text;
}
 
// Contacts Page Jscript
// Google Maps

function initMap() {

    var markers = [];

    // Create a custom marker icon.
    var image = {
        url: "./img/locationicon.png",
        scaledSize: new google.maps.Size(25, 25)
    };


    // Create an array of locations, all coordinates are  general ones from Google Maps.
    var locations = [
        ["0", "<div style='float:left'><img src='./img/locationicon.png'></div><div style='float:right; padding: 10px;'><b>Address/Time</b><br/><b>Central Park,</b><br/>Sandyford<br/><i style='color:blue;'>Wednesday 11am-2pm</i></div>", image, 53.270239, -6.203806, "Wednesday"],
        ["1", "<div style='float:left'><img src='./img/locationicon.png'></div><div style='float:right; padding: 10px;'><b>Address/Time</b><br/><b>Merrion Square,</b><br/>Dublin 4<br/><i style='color:blue;'>Thursday 11am-3pm</i></div>", image, 53.339638, -6.249067, "Thursday"],
        ["2", "<div style='float:left'><img src='./img/locationicon.png'></div><div style='float:right; padding: 10px;'><b>Address/Time</b><br/><b>Clontarf Red Stables,</b><br/>Dublin 3<br/><i style='color:blue;'>Saturday 10am-4pm</i></div>", image, 53.369157, -6.175849 , "Saturday"],
        ["3", "<div style='float:left'><img src='./img/locationicon.png'></div><div style='float:right; padding: 10px;'><b>Address/Time</b><br/><b>Herbert Park</b><br/>Dublin 6<br/><i style='color:blue;'>Sunday 10am-4pm</i></div>", image,53.327458, -6.235408,  "Sunday"]
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
                closeAllInfoWindows(map);
                map.panTo(properties.position); //change position on focus change
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

// Form Submit
 // Source: 
// https://github.com/jamiewilson/form-to-google-sheets#7-adding-additional-form-data 
function submitForm() {
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyEeA8QsB9u4O_EgAOb1cBWwQxKlGre8K_DxliqwFVNqu6Zr84/exec'
        const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)}, form.reset())
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
}