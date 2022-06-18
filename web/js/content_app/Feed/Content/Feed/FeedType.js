import ContentType from "../../../../content/ContentType.js";
import FeedForm from "./FeedForm.js";
import FeedView from "./FeedView.js";
import FeedSearch from "./FeedSearch.js";

export default class FeedType extends ContentType {

    loadContentType() {

        this.label = "Feed";
        this.id = "93250a52-8f7d-4971-af46-467369ae5993";
        this.form = FeedForm;
        this.view = FeedView;
        this.search = FeedSearch;

    }

}