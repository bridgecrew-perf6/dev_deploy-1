import ContentType from "../../content/ContentType.js";
import LargeTextView from "./LargeTextView.js";
import {HtmlForm} from "./HtmlForm.js";

export default class HtmlType extends ContentType {

    constructor() {
        super();

        this.label = "Html";
        this.id = "e1daa5be-9302-4126-b85b-a79623a3c86c";
        this.form = HtmlForm;
        this.view = LargeTextView;

    }

}