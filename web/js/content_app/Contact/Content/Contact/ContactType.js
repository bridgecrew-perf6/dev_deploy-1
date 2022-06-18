import ContentType from "../../../../content/ContentType.js";
import ContactForm from "./ContactForm.js";
import ContactView from "./ContactView.js";

export default class ContactType extends ContentType {

    loadContentType() {
        this.label = "Contact";
        this.id = "e0cba854-3714-4fa8-b16b-f0eb7aa5d163";
        this.form = ContactForm;
        this.view = ContactView;
    }


}