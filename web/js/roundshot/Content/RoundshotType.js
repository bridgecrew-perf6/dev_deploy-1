import ContentType from "../../content/ContentType.js";
import RoundshotView from "./RoundshotView.js";
import RoundshotSearch from "./RoundshotSearch.js";

export default class RoundshotType extends ContentType {

    loadContentType() {

        this.label = "Roundshot";
        this.id = "4fa7169f-5498-4c56-80e8-9a7bf7dbed5d";
        this.view = RoundshotView;
        this.search=RoundshotSearch;

    }

}