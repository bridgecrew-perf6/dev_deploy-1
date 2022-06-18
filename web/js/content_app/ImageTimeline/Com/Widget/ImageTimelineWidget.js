import AdminImage from "../../../../framework/Image/AdminImage.js";
import H3Container from "../../../../html/Title/H3.js";
import ServiceRequest from "../../../../framework/Service/ServiceRequest.js";
import ImageTimelineListBox from "../ListBox/ImageTimelineListBox.js";
import WidgetContainer from "../../../../framework/Com/Widget/Widget.js";

export default class ImageTimelineWidget extends WidgetContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "Image Timeline";
        this.widgetIcon = "image";

    }


    render() {


        let timeline = new ImageTimelineListBox(this);
        timeline.onChange = function (id) {

            let imageService = new ServiceRequest("imagetimeline-list");
            imageService.addParameter("id", id);
            imageService.onDataRow = function (dataRow) {

                h3.text = dataRow.timeline;

                img.label = dataRow.timeline;
                img.src = dataRow.image_url;
                img.imageLarge = dataRow.image_url;
                //img.widthPercent = 100;


            };
            imageService.sendRequest();


        };
        timeline.render();


        let h3 = new H3Container(this);

        let img = new AdminImage(this);
        img.maxWidthPercent = 100;
        img.maxHeightPercent = 100;
        img.render();


    }


}