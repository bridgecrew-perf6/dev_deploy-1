import ContentForm from "../../../../content/ContentForm.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";

export default class UrlFileForm extends ContentForm {

    render() {

        this.serviceName = "file-url-post";

        let url = new BootstrapTextBox(this);
        url.label = "Url";
        url.name = "url";

        this.renderSubmitButton();

        this.onAfterSubmit = function () {
            url.value = "";
        };

    }

}