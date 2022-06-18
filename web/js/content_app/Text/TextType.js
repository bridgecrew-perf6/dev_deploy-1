import ContentType from "../../content/ContentType.js";
import {TextContentForm} from "./TextForm.js";
import TextView from "./TextView.js";


export default class TextType extends ContentType {

    loadContentType() {

        this.label = "Text";
        this.id="00b2fd69-59de-4e2d-b829-640c142253eb";
        this.form = TextContentForm;
        this.view= TextView;

    }

}