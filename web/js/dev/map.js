//(new Debug()).write("one");

import Debug from "../core/Debug/Debug.js";
import ServiceRequest from "../framework/Service/ServiceRequest.js";

let map = new OpenLayers.Map("mapdiv");
map.addLayer(new OpenLayers.Layer.OSM());



var lonLat = new OpenLayers.LonLat(8.802985037346886,47.32895888560564)
    .transform(
        new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
        map.getProjectionObject() // to Spherical Mercator Projection
    );

var zoom = 14;

/*
var markers = new OpenLayers.Layer.Markers("Markers");
map.addLayer(markers);
markers.addMarker(new OpenLayers.Marker(lonLat));*/

map.setCenter(lonLat, zoom);

(new Debug()).write("hello");

let service=new ServiceRequest("wetzikon-poi-search");
service.onDataRow=function (dataRow) {

    (new Debug()).write(dataRow.titel);

    var lonLat = new OpenLayers.LonLat(dataRow.lon,dataRow.lat)
        .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
        );

    var markers = new OpenLayers.Layer.Markers(dataRow.titel);
    map.addLayer(markers);
    markers.addMarker(new OpenLayers.Marker(lonLat));





};
service.sendRequest();
