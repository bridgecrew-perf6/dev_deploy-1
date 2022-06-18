import ContentForm from "../../../../content/ContentForm.js";
import TextBox from "../../../../framework/Form/TextBox.js";
import LargeTextBox from "../../../../framework/Form/LargeTextBox.js";
import BootstrapButton from "../../../../framework/Bootstrap/Button/BootstrapButton.js";
import GeoLocationEvent from "../../../../core/Geo/GeoLocationEvent.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";
import BootstrapLargeTextBox from "../../../../framework/Bootstrap/Form/BootstrapLargeTextBox.js";

export default class LocationForm extends ContentForm {


    render() {

        this.serviceName = "location-post";

        let location = new BootstrapTextBox(this);  // new TextBox(this);
        location.label = "Location";
        location.name = "location";

        let description = new BootstrapLargeTextBox(this);
        description.label = "Description";
        description.name = "description";


        let btn=new BootstrapButton(this);
        btn.label="get current position";
        btn.onClick=function () {

            let geo = new GeoLocationEvent();
            geo.onLocation = function (location) {
                lat.value = location.latitude;
                lon.value = location.longitude;
            }
            geo.getCurrentPosition();

        };


        let lat = new BootstrapTextBox(this);
        lat.label = "Lat";
        lat.name = "lat";

        let lon = new BootstrapTextBox(this);
        lon.label = "Lon";
        lon.name = "lon";

        this.renderSubmitButton();

    }


}