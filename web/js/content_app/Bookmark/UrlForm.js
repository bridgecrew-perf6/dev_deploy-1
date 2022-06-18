import ContentForm from "../../content/ContentForm.js";
import BootstrapTextBox from "../../framework/Bootstrap/Form/BootstrapTextBox.js";


export default class UrlForm extends ContentForm {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "url-post";

    }


    render() {

        let url = new BootstrapTextBox(this);
        url.label = "Url";
        url.name = "url";

        this.renderSubmitButton();

    }

}

