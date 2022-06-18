import ContentType from "../../../../content/ContentType.js";
import ContainerForm from "./ContainerForm.js";
import ContainerView from "./ContainerView.js";

export default class ContainerType extends ContentType {

    loadContentType() {

        this.label = "Container";
        this.id = "7b224ca7-6cb5-4abf-a8eb-87b38e36ae96";
        this.form = ContainerForm;
        this.view = ContainerView;

    }

}
