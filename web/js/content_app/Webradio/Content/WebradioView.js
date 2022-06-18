import ContentView from "../../../content/ContentView.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import Slideshow from "../../../framework/Com/Slideshow/Slideshow.js";
import Debug from "../../../core/Debug/Debug.js";
import ImageContainer from "../../../html/Image/Image.js";

export default class WebradioView extends ContentView {


    onData(data) {

        (new Debug()).write(data);

        /*let p = new ParagraphContainer(this);
        p.text = data.id;*/
        //p.text=data.data_id;

        let img = new ImageContainer(this);
        img.widthPercent=100;
        img.src = data.image_url;

        /*
        let slider = new Slideshow(this);

        let service = new ServiceRequest("imagetimeline-image");
        service.addParameter("data-id", data.id);
        service.onRow = function (row) {
            //(new Debug()).write(row);
            slider.addImage(row.image_url);
        }
        service.sendRequest();*/


    }


}