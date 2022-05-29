import BootstrapPage from "../../../framework/Bootstrap/Page/BootstrapPage.js";
import EmagrammImage from "../Com/Image/EmagrammImage.js";
import LocationListBox from "../Com/ListBox/LocationListBox.js";

export default class EmagrammPage extends BootstrapPage {


    constructor(parentContainer) {

        super(parentContainer);
        this.pageTitle = "Emagramm";
        //this.pageIcon="cloud";

    }


    render() {

        //let container=new EmagrammContainer(this);

        let local = this;


        let location = new LocationListBox(this);
        location.onChange = function () {
            image.locationId = location.value;  // 1;
        };


        /*let service = new EmagrammImageService();
        service.locationId = 1;
        service.onDataRow = function (dataRow) {

            let img = new BootstrapImage(local);
            img.src = dataRow.image_url;

        };
        service.sendRequest();*/

        let image = new EmagrammImage(this);
        image.locationId = 1;


    }


}





