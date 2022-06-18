import TextBox from "../../../../framework/Form/TextBox.js";
import GeoLocationEvent from "../../../../core/Geo/GeoLocationEvent.js";
import WidgetContainer from "../../../../framework/Com/Widget/Widget.js";
import DateTimeFormat from "../../../../core/Date/DateTimeFormat.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";
import SearchChMapContainer from "../../../Map/Com/SearchChMapContainer.js";

export default class CurrentGeoCoordinateWidget extends WidgetContainer {


    constructor(parentContainer) {

        super(parentContainer);

        this.widgetTitle = "Current Geo Coordinate";
        this.widgetIcon = "geo-alt";

    }


    render() {


        let lat = new TextBox(this);
        lat.label = "Lat";

        let lon = new TextBox(this);
        lon.label = "Lon";

        let alt = new TextBox(this);
        alt.label = "Alt";

        let p = new ParagraphContainer(this);

        let map=new SearchChMapContainer(this);
        map.widthPixel=500;
        map.heightPixel=500;


        let geo = new GeoLocationEvent();
        geo.onLocation = function (location) {

            //(new Debug()).write(location);

            lat.value = location.latitude;
            lon.value = location.longitude;
            alt.value=location.altitude;

            p.text = (new DateTimeFormat()).getTime();


            map.coordinate(location.latitude,location.longitude);
            map.loadMap();


            /*let service = new ServiceRequest("tracking-post");
            service.addParameter("lat",location.latitude);
            service.addParameter("lon",location.longitude);
            service.sendRequest();*/

        }

        geo.startWatch();


        /*
        let btn = new AdminButton(this);
        btn.label="Delete";
        btn.onClick=function () {

            (new ServiceRequest("tracking-delete")).sendRequest();

            let notification= new StatusInformation();
            notification.showInformation("Tracking Deleted");

        };


        let hyperlink=new HyperlinkContainer(this);
        hyperlink.text="kml";
        hyperlink.href="/tracking-kml";*/

    }


}