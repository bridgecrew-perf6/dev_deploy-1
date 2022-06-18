import ContentForm from "../../../../content/ContentForm.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";

export default class EmailForm extends ContentForm {
    
    render() {
        
        this.serviceName="contact-email-post";

        let email=new BootstrapTextBox(this);
        email.label="email";
        email.name="email";

        this.renderSubmitButton();
        
    }


}