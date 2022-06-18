import ContentForm from "../../../content/ContentForm.js";
import TextBox from "../../../framework/Form/TextBox.js";

export default class WebradioForm extends ContentForm {



    render() {

        this.serviceName = "webcam-post";

        let webcam = new TextBox(this);
        webcam.label = "Webcam"
        webcam.name = "webcam";

        let imageUrl = new TextBox(this);
        imageUrl.label = "Image Url";
        imageUrl.name = "image_url";

        this.renderSubmitButton();


    }


}