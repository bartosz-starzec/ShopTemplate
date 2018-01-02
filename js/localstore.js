//    MAPS

//deklaracja map

var maps = [{
        name: "firstMap",
        "lat": 51.51276,
        "lng": -0.139983
    },
    {
        name: "secondMap",
        lat: 40.768223,
        lng: -73.98241
    },
    {
        name: "thirdMap",
        lat: 48.864146,
        lng: 2.333858
    }
];

// ustawienie wartości zmiennych do wyświetlania pierwszej mapy przy            starcie strony

var mapp = maps[0];
var currMap = 0;

//funkcja ukrywająca niepotrzebne mapy i wyświetlająca wybraną przez użytkownika 
$(".showMap").on("click", function() {
    var name = $(this).data("tags");
    currMap = Number(name);
    $(this).parents().find(".showMap").removeClass("btn-active");
    $(this).addClass("btn-active");
    $(this)
        .parents()
        .find(".storeMap")
        .removeClass("dispMap"); // ukrycie aktualnie wyświetlanej mapy
    $(this)
        .parents()
        .find(".storeMap")
        .addClass("hide"); // ukrycie wszystkich map

    $(this)
        .parents()
        .find(".storeLoc" + currMap)
        .addClass("dispMap"); // wyświetlenie wybranej mapy

    mapp = maps[currMap]; // zmienna przechowująca mapę odpowiadającą przyciskowi klikniętemu przez użytkownika

    // szerokości geograficzne mapy
    var lat = mapp.lat;
    var lng = mapp.lng;

    initMap(); // wywolanie funkcji wyświetlającej mapy
});


//funkcja odpowiadającą za wyświetlenie map
function initMap() {

    var lat = mapp.lat;
    var lng = mapp.lng;
    var uluru = {
        lat: lat,
        lng: lng
    };

    var map = new google.maps.Map(document.getElementsByClassName("map")[currMap], {
        zoom: 17,
        styles: [{
                elementType: "geometry",
                stylers: [{
                    color: "#f5f5f5"
                }]
            },
            {
                elementType: "labels.icon",
                stylers: [{
                    visibility: "off"
                }]
            },
            {
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#616161"
                }]
            },
            {
                elementType: "labels.text.stroke",
                stylers: [{
                    color: "#f5f5f5"
                }]
            },
            {
                featureType: "administrative.land_parcel",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#bdbdbd"
                }]
            },
            {
                featureType: "landscape",
                elementType: "labels.icon",
                stylers: [{
                    visibility: "on"
                }]
            },
            {
                featureType: "poi",
                elementType: "geometry",
                stylers: [{
                    color: "#eeeeee"
                }]
            },
            {
                featureType: "poi",
                elementType: "labels.icon",
                stylers: [{
                        saturation: -95
                    },
                    {
                        visibility: "on"
                    }
                ]
            },
            {
                featureType: "poi",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#757575"
                }]
            },
            {
                featureType: "poi.attraction",
                elementType: "labels.icon",
                stylers: [{
                    visibility: "on"
                }]
            },
            {
                featureType: "poi.park",
                elementType: "geometry",
                stylers: [{
                    color: "#e5e5e5"
                }]
            },
            {
                featureType: "poi.park",
                elementType: "labels.icon",
                stylers: [{
                    visibility: "on"
                }]
            },
            {
                featureType: "poi.park",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#9e9e9e"
                }]
            },
            {
                featureType: "road",
                elementType: "geometry",
                stylers: [{
                    color: "#ffffff"
                }]
            },
            {
                featureType: "road.arterial",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#757575"
                }]
            },
            {
                featureType: "road.highway",
                elementType: "geometry",
                stylers: [{
                    color: "#dadada"
                }]
            },
            {
                featureType: "road.highway",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#616161"
                }]
            },
            {
                featureType: "road.local",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#9e9e9e"
                }]
            },
            {
                featureType: "transit.line",
                elementType: "geometry",
                stylers: [{
                    color: "#e5e5e5"
                }]
            },
            {
                featureType: "transit.station",
                elementType: "geometry",
                stylers: [{
                    color: "#eeeeee"
                }]
            },
            {
                featureType: "water",
                elementType: "geometry",
                stylers: [{
                    color: "#c9c9c9"
                }]
            },
            {
                featureType: "water",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#9e9e9e"
                }]
            }
        ],
        center: uluru
    });
    // znacznik na mapie
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}