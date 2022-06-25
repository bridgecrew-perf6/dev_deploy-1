//(new Debug()).write("one");

import Debug from "../core/Debug/Debug.js";
import ServiceRequest from "../framework/Service/ServiceRequest.js";
import AdminDialog from "../framework/Admin/Dialog/AdminDialog.js";
import AdminMainContent from "../framework/Admin/Layout/AdminMainContent.js";
import ParagraphContainer from "../html/Content/Paragraph.js";
import AdminImage from "../framework/Admin/Image/AdminImage.js";

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

    var marker = new OpenLayers.Layer.Markers(dataRow.titel);

        let clickMarker = function(e) {

        //alert("click");

        let content = new AdminMainContent();

        let dialog = new AdminDialog(content);
        dialog.dialogTitle= dataRow.titel;

        let p=new ParagraphContainer(dialog);
        p.text= dataRow.text;


        for (let imageUrl of dataRow.image) {
            // ...use `element`...

            (new Debug()).write(imageUrl);

            let img = new AdminImage(dialog);
            img.src = imageUrl;


        }


        dialog.showDialog();

        /*let popup = new OpenLayers.Popup.FramedCloud("chicken",
            marker.lonlat,
            new OpenLayers.Size(200, 200),
            title,
            null, false );
        map.addPopup(popup);*/
    };

    marker.events.register( 'click', marker, clickMarker );
    marker.events.register( 'touchstart', marker, clickMarker );



    map.addLayer(marker);
    marker.addMarker(new OpenLayers.Marker(lonLat));





};
service.sendRequest();
