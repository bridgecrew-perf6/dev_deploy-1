import ContentType from "../../../content/ContentType.js";
import RoundshotSearchView from "./RoundshotSearchView.js";

export default class RoundshotSearchType extends ContentType {

    loadContentType() {

        this.label = "Roundshot";
        this.id = "a46f5c03-6b1d-4b2b-ada9-dbf6462aeadf";
        this.view = RoundshotSearchView;

    }

}