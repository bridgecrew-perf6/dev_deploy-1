import ParagraphContainer from "../../../../../html/Content/Paragraph.js";
import ServiceRequest from "../../../../../framework/Service/ServiceRequest.js";

export default class ImageCountParagraph extends ParagraphContainer {


    constructor(parentContainer) {

        super(parentContainer);

        let local=this;

        this.text = "Total: ";

        let service = new ServiceRequest("file-image-count");
        service.onDataRow = function (row) {
            local.text = "Total: "+row.count_format;
        };
        service.sendRequest();

    }


}