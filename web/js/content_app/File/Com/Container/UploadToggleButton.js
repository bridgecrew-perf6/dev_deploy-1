import FileUploadForm from "../Form/FileUploadForm.js";
import ToggleButton from "../../../../framework/Com/Toggle/ToggleButton.js";
import ContentFileUploadForm from "../Form/ContentFileUploadForm.js";

export default class UploadToggleButton extends ToggleButton {

    onSubmit = null;

    constructor(parentContainer) {

        super(parentContainer);

        let local = this;

        this.buttonLabel = "File Upload";
        this.icon="plus-lg";

        this.onShow = function () {




            let upload = new ContentFileUploadForm(local._toggleDiv);  // new FileUploadForm(local._toggleDiv);
            //upload.serviceName = "file-upload";
            upload.onUpload = function (item) {

                if (local.onSubmit !== null) {
                    local.onSubmit(item);
                }

            }
            upload.render();

        }

    }

}