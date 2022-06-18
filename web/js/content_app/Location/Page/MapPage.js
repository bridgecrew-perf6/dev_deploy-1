import BootstrapPage from "../../../framework/Bootstrap/Page/BootstrapPage.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import SearchChMapContainer from "../../Map/Com/SearchChMapContainer.js";
import GeoLocationEvent from "../../../core/Geo/GeoLocationEvent.js";
import DateTimeFormat from "../../../core/Date/DateTimeFormat.js";
import BootstrapTextBox from "../../../framework/Bootstrap/Form/BootstrapTextBox.js";
import BootstrapFixedFullPage from "../../../framework/Bootstrap/Page/BootstrapFixedFullPage.js";
import CurrentLocationForm from "../Content/Location/CurrentLocationForm.js";
import BootstrapButton from "../../../framework/Bootstrap/Button/BootstrapButton.js";

export default class MapPage extends BootstrapFixedFullPage {    // BootstrapPage {

    loadPage() {

        this.pageTitle = "Map";
        this.pageUrl = "map";

    }


    render() {


        let btn=new BootstrapButton(this);
        btn.label="Vibration";
        btn.onClick=function () {

            window.navigator.vibrate(2000);

        };


        let form=new CurrentLocationForm(this);
        form.render();









        let lat = new BootstrapTextBox(this);
        lat.label = "Lat";

        let lon = new BootstrapTextBox(this);
        lon.label = "Lon";

        let alt = new BootstrapTextBox(this);
        alt.label = "Alt";

        let p = new ParagraphContainer(this);

        let map = new SearchChMapContainer(this);
        map.widthPercent = 100;
        map.heightPercent=100;
        //map.heightPer .heightPixel = 500;

        let geo = new GeoLocationEvent();
        geo.onLocation = function (location) {

            lat.value = location.latitude;
            lon.value = location.longitude;
            alt.value = location.altitude;

            p.text = (new DateTimeFormat()).getTime();

            map.coordinate(location.latitude, location.longitude);
            //map.loadMap();


            /*let service = new ServiceRequest("tracking-post");
            service.addParameter("lat",location.latitude);
            service.addParameter("lon",location.longitude);
            service.sendRequest();*/

        }

        geo.startWatch();


    }


}