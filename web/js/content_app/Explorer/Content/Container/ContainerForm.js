import ContentForm from "../../../../content/ContentForm.js";
import TextBox from "../../../../framework/Form/TextBox.js";
import LargeTextBox from "../../../../framework/Form/LargeTextBox.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";
import BootstrapLargeTextBox from "../../../../framework/Bootstrap/Form/BootstrapLargeTextBox.js";

export default class ContainerForm extends ContentForm {

    _container;

    _description;


    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "container-post";

    }


    render() {

        this._container = new BootstrapTextBox(this);
        this._container.label = "Container";
        this._container.name = "container";
        this._container.setFocus();

        this._description = new BootstrapLargeTextBox(this);
        this._description.label = "Description";
        this._description.name = "description";

        this.renderSubmitButton();

    }


    onEditForm(dataRow) {

        this._container.value = dataRow.container;
        this._description.value = dataRow.description;

    }


}