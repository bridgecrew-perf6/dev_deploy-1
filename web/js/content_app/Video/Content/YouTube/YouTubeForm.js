import ContentForm from "../../../../content/ContentForm.js";
import TextBox from "../../../../framework/Form/TextBox.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";

export default class YouTubeForm extends ContentForm {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "youtube-post";

    }


    render() {

        let url = new BootstrapTextBox(this);  // new TextBox(this);
        url.name = "url";
        url.label = "YouTube Url";
        url.validation=true;

        this.renderSubmitButton();

    }


}