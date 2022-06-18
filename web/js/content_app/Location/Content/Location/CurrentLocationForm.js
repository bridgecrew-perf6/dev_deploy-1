import ContentForm from "../../../../content/ContentForm.js";
import TextBox from "../../../../framework/Form/TextBox.js";
import LargeTextBox from "../../../../framework/Form/LargeTextBox.js";
import GeoLocationEvent from "../../../../core/Geo/GeoLocationEvent.js";
import DateTimeFormat from "../../../../core/Date/DateTimeFormat.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";
import BootstrapLargeTextBox from "../../../../framework/Bootstrap/Form/BootstrapLargeTextBox.js";
import LocationForm from "./LocationForm.js";

export default class CurrentLocationForm extends LocationForm {   // ContentForm {


    render() {

        super.render();

        /*
        this.serviceName = "location-post";

        let location = new BootstrapTextBox(this);  // new TextBox(this);
        location.label = "Location";
        location.name = "location";

        let description = new BootstrapLargeTextBox(this);  // new LargeTextBox(this);
        description.label = "Description";
        description.name = "description";

        let lat = new BootstrapTextBox(this);  //new TextBox(this);
        lat.label = "Lat";
        lat.name = "lat";

        let lon = new BootstrapTextBox(this);  //new TextBox(this);
        lon.label = "Lon";
        lon.name = "lon";*/

        let geo = new GeoLocationEvent();
        geo.onLocation = function (location) {

            lat.value = location.latitude;
            lon.value = location.longitude;
            //alt.value = location.altitude;

            //p.text = (new DateTimeFormat()).getTime();

            //map.coordinate(location.latitude, location.longitude);
            //map.loadMap();

            /*let service = new ServiceRequest("tracking-post");
            service.addParameter("lat",location.latitude);
            service.addParameter("lon",location.longitude);
            service.sendRequest();*/

        }

        geo.getCurrentPosition();

        this.renderSubmitButton();

    }


}