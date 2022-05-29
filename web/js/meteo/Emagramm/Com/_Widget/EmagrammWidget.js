import EmagrammImageService from "../../Service/EmagrammImageService.js";
import ImageContainer from "../../../../html/Image/Image.js";
import WidgetContainer from "../../../../framework/Com/Widget/WidgetContainer.js";

export default class EmagrammWidget extends WidgetContainer {

    constructor(parentContainer) {

        super(parentContainer);

        this.widgetTitle = "Emagramm";
        this.widgetIcon = "cloud";

    }


    render() {

        let local = this;

        let service = new EmagrammImageService();
        service.locationId = 1;
        service.onDataRow = function (dataRow) {

            //(new Debug()).write(dataRow);

            let img = new ImageContainer(local);
            img.maxWidthPercent = 100;
            img.maxHeightPercent = 100;
            img.src = dataRow.image_url;


        };
        service.sendRequest();


        //let container=new EmagrammContainer(this);


        /*
        let location = new LocationListBox();
        this.addContainer(location);
        location.render();

        let slideshow = new Slideshow();
        this.addContainer(slideshow);

        location.onChange = function () {

            slideshow.clearImage();

            let loader = new LoaderContainer(slideshow);

            let service = new ServiceRequest("emagramm-image");
            service.addParameter("location", location.value);
            service.onRow = function (data) {
                slideshow.addImage(data.image_url);
            };

            service.onFinished = function () {
                loader.removeContainer();
            };

            service.sendRequest();

        }*/

    }

}