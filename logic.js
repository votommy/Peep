document.getElementById("copyrightInfo").innerHTML = "&copy; " + new Date().getFullYear() + " Peep. All rights reserved";
            
function transformHamburger() {
    if(!document.getElementById("hamburgerMenu").classList.contains("xBTN")) {
        showNavList();
    }
    else {
        hideNavList();
    }
}

function showNavList() {
    document.getElementById("hamburgerMenu").classList.add("xBTN");
    document.getElementById("navList").classList.add("navListVisible");
}
function hideNavList() {
    document.getElementById("hamburgerMenu").classList.remove("xBTN");
        document.getElementById("navList").classList.remove("navListVisible");
}

const peepMarker = L.icon({
    iconUrl: "image/marker.png",
    shadowUrl: "image/markerShadow.png",
    iconSize: [22.5, 27],
    shadowSize: [25, 7.6],
    iconAnchor: [11.25, 27],
    shadowAnchor: [11.25, 3],
    popupAnchor: [0, -13.5]
});
            
const mymap = L.map('mapid', {scrollWheelZoom: false}).setView([39.10345, -94.58311], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiczUzMTgyMyIsImEiOiJjazZucndiOWQweXF2M2xwYnh4aThzYzh6In0.JbIjPZx26xRfEIDKrlFPgg'
}).addTo(mymap);

//Sample data: events
const chanceBday = L.marker([39.099418, -94.579942], {icon: peepMarker}).addTo(mymap);
chanceBday.bindPopup("<b>Corey's Birthday!</b><br>Saturday, 7pm-11pm").openPopup();

const sandwichShop = L.marker([39.102763, -94.588015], {icon: peepMarker}).addTo(mymap);
sandwichShop.bindPopup("<b>Free sandwiches!</b><br>Today! 2pm - 3:30pm").openPopup();

const charityBasketball = L.marker([39.086162, -94.577597], {icon: peepMarker}).addTo(mymap);
charityBasketball.bindPopup("<b>Basketball game for charity</b><br>Tomorrow, 10am - 11:30am").openPopup();

// For getting coordinates
//function onMapClick(e) {
//    alert("You clicked the map at " + e.latlng);
//}
//mymap.on('click', onMapClick);