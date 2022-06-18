import ContentForm from "../../../content/ContentForm.js";
import TextBox from "../../../framework/Form/TextBox.js";

export default class DashboardForm extends ContentForm {

    _container;

    render() {

        this._container=new TextBox(this);
        this._container.label = "Container";

    }

}