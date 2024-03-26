
    function initMap(){
        var styles = [
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#444444"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#46bcec"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            }
        ];

        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap',
            styles: styles,
            scrollwheel: false,
            mapTypeControl: false,
            clickableIcons: false
        };

        map = new google.maps.Map(document.getElementById("contacts-map-wrap"), mapOptions);
        map.setTilt(45);

        var position = new google.maps.LatLng('54.701791', '25.221833');
        bounds.extend(position);
        var image = {
            url: 'http://since2.lt/rekstata/wp-content/uploads/2019/12/pin-ping.png',
            scaledSize: new google.maps.Size(41, 55),
        };

        marker = new google.maps.Marker({
            position: position,
            map: map,
            icon: image
        });

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);

        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(17);
            google.maps.event.removeListener(boundsListener);
        });
    }


