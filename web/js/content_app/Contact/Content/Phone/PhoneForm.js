import ContentForm from "../../../../content/ContentForm.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";

export default class PhoneForm extends ContentForm {
    
    render() {
        
        this.serviceName="contact-phone-post";

        let phone=new BootstrapTextBox(this);
        phone.label="phone";
        phone.name="phone";

        this.renderSubmitButton();
        
    }


}