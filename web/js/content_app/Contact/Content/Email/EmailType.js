import ContentType from "../../../../content/ContentType.js";
import EmailForm from "./EmailForm.js";
import EmailView from "./EmailView.js";

export default class EmailType extends ContentType {

    loadContentType() {
        this.label="Email";
        this.id="ac76aba5-b806-4ed3-8a44-4b70f41c441d";
        this.form=EmailForm;
        this.view=EmailView;
    }


}