import ContentType from "../../../content/ContentType.js";
import EmagrammView from "./EmagrammView.js";

export default class EmagrammType extends ContentType {

    loadContentType() {
        this.label = "Emagramm";
        this.id = "92f8d854-e7db-4ba2-9037-1b859e4310cb";
        this.view = EmagrammView;
    }

}