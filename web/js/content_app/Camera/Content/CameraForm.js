import ContentForm from "../../../content/ContentForm.js";
import BootstrapFileUpload from "../../../framework/Bootstrap/Form/BootstrapFileUpload.js";
import FileAccept from "../../../html/Form/Input/FileAccept.js";


export default class CameraForm extends ContentForm {

    render() {

        this.serviceName = "camera-post";

        let file = new BootstrapFileUpload(this);
        file.label = "Image";
        file.name = "image";
        file.accept = FileAccept.IMAGE;

        this.renderSubmitButton();

    }

}