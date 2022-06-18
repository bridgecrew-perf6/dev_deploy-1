import ContentForm from "../../../../content/ContentForm.js";
import FileUpload from "../../../../framework/Form/FileUpload.js";

export default class FileForm extends ContentForm {

    _file;

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "file-upload";

        this._file = new FileUpload(this);
        this._file.label = "File";
        this._file.name = "file";

        this.renderSubmitButton();

    }


    set accept(value) {

        this._file.accept = value;

    }


    validateForm() {

        let value = false;
        if (this._file.value !== "") {
            value = true;
        } else {
            this._file.label = "Keine Datei ausgewählt.";
        }

        return value;

    }


}