import FileUploadForm from "./FileUploadForm.js";
import FileAccept from "../../../../html/Form/Input/FileAccept.js";

export default class ImageFileUploadForm extends FileUploadForm {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "image-post";
        this.accept = FileAccept.IMAGE;

    }

}