import ContentType from "../../../../content/ContentType.js";
import AddressForm from "./AddressForm.js";
import AddressView from "./AddressView.js";

export default class AddressType extends ContentType {

    loadContentType() {
        this.id = "a5465605-c353-4857-80f9-7587c154307b";
        this.label = "Address";
        this.form = AddressForm;
        this.view = AddressView;
    }

}