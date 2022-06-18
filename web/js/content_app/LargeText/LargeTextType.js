import ContentType from "../../content/ContentType.js";
import {LargeTextForm} from "./LargeTextForm.js";
import LargeTextView from "./LargeTextView.js";


export default class LargeTextType extends ContentType {

    loadContentType() {

        this.label = "Large Text";
        this.id = "1b4e6652-8f85-4cd8-b44a-1f50afb696ac";
        this.form = LargeTextForm;
        this.view = LargeTextView;

    }

}