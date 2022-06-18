import ContentType from "../../../../content/ContentType.js";
import PhoneForm from "./PhoneForm.js";
import PhoneView from "./PhoneView.js";

export default class PhoneType extends ContentType {

    loadContentType() {
        this.label="Phone";
        this.id="8c5cb075-94e6-4178-8d1b-11950cf027bd";
        this.form=PhoneForm;
        this.view=PhoneView;
    }


}