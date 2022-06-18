import ContentForm from "../../../content/ContentForm.js";
import BootstrapTextBox from "../../../framework/Bootstrap/Form/BootstrapTextBox.js";

export default class WebcamForm extends ContentForm {

    render() {

        this.serviceName = "webcam-post";

        let webcam = new BootstrapTextBox(this);
        webcam.label = "Webcam"
        webcam.name = "webcam";

        let imageUrl = new BootstrapTextBox(this);
        imageUrl.label = "Image Url";
        imageUrl.name = "image_url";

        this.renderSubmitButton();

    }

}