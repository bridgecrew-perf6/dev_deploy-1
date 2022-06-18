import ContentForm from "../../../../content/ContentForm.js";
import TextBox from "../../../../framework/Form/TextBox.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";

export default class AddressForm extends ContentForm {

    render() {

        this.serviceName = "address-post";

        let street = new BootstrapTextBox(this);
        street.label = "Street";
        street.name = "street";
        street.validation=true;

        let place = new BootstrapTextBox(this);
        place.label = "Place";
        place.name = "place";
        place.validation=true;

        this.renderSubmitButton();

    }

}