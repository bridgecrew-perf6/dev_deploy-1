import ServiceFileUpload from "../../../../framework/Com/Upload/ServiceFileUpload.js";

export default class ContentFileServiceFileUpload extends ServiceFileUpload {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "file-upload";  //content-poi-file-upload";

    }

}