import ContentType from "../../../../content/ContentType.js";
import FeedItemView from "./FeedItemView.js";

export default class FeedItemType extends ContentType {

    loadContentType() {

        this.label = "Feed Article";  // "Feed Item";
        this.id = "7c727c6f-e179-442d-acf6-e5f7c602d1ee";
        this.view = FeedItemView;

    }

}