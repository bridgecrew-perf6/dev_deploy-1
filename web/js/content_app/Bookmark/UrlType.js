import ContentType from "../../content/ContentType.js";
import UrlView from "./UrlView.js";
import UrlForm from "./UrlForm.js";


export default class UrlType extends ContentType {

    constructor() {

        super();

        this.label = "Url";
        this.id = "0abbd11d-5321-4eef-a984-0e4061c5738d";
        this.form= UrlForm;
        this.view= UrlView;

    }

}