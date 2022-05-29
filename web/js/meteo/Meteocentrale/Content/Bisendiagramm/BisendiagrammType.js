import ContentType from "../../../../content/ContentType.js";
import BisendiagrammView from "./BisendiagrammView.js";


export default class BisendiagrammType extends ContentType {

    loadContentType() {
        this.label = "Bisendiagramm";
        this.id = "bf03c313-5292-47eb-82bc-278a65b96881";
        this.view = BisendiagrammView;
    }

}