import BootstrapImage from "../../../../framework/Bootstrap/Image/BootstrapImage.js";
import EmagrammImageService from "../../Service/EmagrammImageService.js";

export default class EmagrammImage extends BootstrapImage {

    constructor(parentContainer) {

        super(parentContainer);



    }


    set locationId(value) {

        let local=this;

        let service = new EmagrammImageService();
        service.locationId = value;
        service.onDataRow = function (dataRow) {

            //let img = new BootstrapImage(local);
            local.src = dataRow.image_url;

        };
        service.sendRequest();


    }


}