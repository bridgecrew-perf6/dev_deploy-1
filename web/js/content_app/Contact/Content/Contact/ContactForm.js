import ContentForm from "../../../../content/ContentForm.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";

export default class ContactForm extends ContentForm {

    render() {

        this.serviceName = "contact-contact-post";

        let company = new BootstrapTextBox(this);
        company.label = "Company";
        company.name = "company";

        let firstName = new BootstrapTextBox(this);
        firstName.label = "First Name";
        firstName.name = "firstName";

        let lastName = new BootstrapTextBox(this);
        lastName.label = "Last Name";
        lastName.name = "lastName";

        let phone = new BootstrapTextBox(this);
        phone.label = "Phone";
        phone.name = "phone";

        let email = new BootstrapTextBox(this);
        email.label = "eMail";
        email.name = "email";

        this.renderSubmitButton();

    }


}