import ContentType from "../../../content/ContentType.js";
import SrfRadioLivestreamView from "./SrfRadioLivestreamView.js";

export default class SrfRadioLivestreamType extends ContentType {

    loadContentType() {

        this.label = "SRF Radio Livestream";
        this.id = "6acc0f65-af55-44f1-936d-ce71f1a32931";
        this.view = SrfRadioLivestreamView;

    }

}