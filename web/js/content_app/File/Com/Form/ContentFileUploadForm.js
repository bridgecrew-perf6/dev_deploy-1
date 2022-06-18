import FileUploadForm from "./FileUploadForm.js";

export default class ContentFileUploadForm extends FileUploadForm {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "file-upload";

    }

}