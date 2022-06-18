import FileUploadForm from "../../Com/Form/FileUploadForm.js";

export default class DocumentForm extends FileUploadForm {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "file-upload";
        this.render();

    }

}