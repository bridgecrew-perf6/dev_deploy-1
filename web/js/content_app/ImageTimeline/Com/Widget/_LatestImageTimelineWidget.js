import AdminWidget from "../../../framework/Widget/AdminWidget.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import AdminImage from "../../../framework/Image/AdminImage.js";

export default class _LatestImageTimelineWidget extends AdminWidget {

    /*constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "Image Timeline";

    }*/


    set imageTimelineId(value) {



    }


    render() {

        let local = this;

        let id = 10;

        let imageService = new ServiceRequest("imagetimeline-list");
        imageService.addParameter("id", id);
        imageService.onRow = function (item) {

            local.widgetTitle = item.timeline;

            let img = new AdminImage(local);
            /*img.widthPercent=100;
            img.render();*/

            img.label = item.timeline;
            img.src = item.image_url;
            img.imageLarge = item.image_url;
            //img.widthPercent = 100;
            img.render();


        };
        imageService.sendRequest();


    }


}