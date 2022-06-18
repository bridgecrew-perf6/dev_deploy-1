import ContentForm from "../../../content/ContentForm.js";
import TextBox from "../../../framework/Form/TextBox.js";

export default class ImageTimelineForm extends ContentForm {

    render() {

        this.serviceName = "imagetimeline-post";

        let timeline = new TextBox(this);
        timeline.label = "Timeline";
        timeline.name = "timeline";

        let imageUrl = new TextBox(this);
        imageUrl.label = "Image Url";
        imageUrl.name = "image_url";

        this.renderSubmitButton();

        this.onAfterSubmit=function () {
            timeline.value="";
            imageUrl.value="";
        }


    }





}