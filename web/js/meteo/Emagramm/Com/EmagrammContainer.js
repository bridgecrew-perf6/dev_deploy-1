import DivContainer from "../../../html/Content/Div.js";
import LocationListBox from "./LocationListBox.js";
import Slideshow from "../../../framework/Com/Slideshow/Slideshow.js";
import LoaderContainer from "../../../framework/Com/Loader/Loader.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";

export default class EmagrammContainer extends DivContainer {

    _slideshow;

    constructor(parentContainer) {

        super(parentContainer);

        let local=this;

        let location = new LocationListBox(this);
        //this.addContainer(location);
        //location.render();

        this._slideshow = new Slideshow(this);
        //this.addContainer(slideshow);

        location.onChange = function () {

            local.loadLocation(location.value);

            //this.load

            /*slideshow.clearImage();

            let loader = new LoaderContainer(slideshow);

            let service = new ServiceRequest("emagramm-image");
            service.addParameter("location", location.value);
            service.onRow = function (data) {
                slideshow.addImage(data.image_url);
            };

            service.onFinished = function () {
                loader.removeContainer();
            };

            service.sendRequest();*/

        }


        this.loadLocation(1);

    }


    loadLocation(locationId) {

        let local=this;

        this._slideshow.clearImage();

        let loader = new LoaderContainer(this._slideshow);

        let service = new ServiceRequest("emagramm-image");
        service.addParameter("location", locationId);
        service.onDataRow = function (data) {
            local._slideshow.addImage(data.image_url);
        };

        service.onFinished = function () {
            loader.removeContainer();
        };

        service.sendRequest();

    }

}