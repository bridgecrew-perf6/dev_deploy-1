import ContentType from "../../../content/ContentType.js";
import WebradioForm from "./WebradioForm.js";
import WebradioView from "./WebradioView.js";

export default class WebradioType extends ContentType {

    loadContentType() {

        this.label = "Webradio";
        this.id = "";
        this.form = WebradioForm;
        this.view = WebradioView;

    }

}