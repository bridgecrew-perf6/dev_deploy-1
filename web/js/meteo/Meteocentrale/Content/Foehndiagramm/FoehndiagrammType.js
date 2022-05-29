import ContentType from "../../../../content/ContentType.js";
import FoehndiagrammView from "./FoehndiagrammView.js";


export default class FoehndiagrammType extends ContentType {

    loadContentType() {
        this.label = "Foehndiagramm";
        this.id = "545a1902-d9ab-4942-b214-87b96788788b";
        this.view = FoehndiagrammView;
    }

}