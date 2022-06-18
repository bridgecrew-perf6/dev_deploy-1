import ContentType from "../../../../content/ContentType.js";
import YouTubeView from "./YouTubeView.js";
import YouTubeForm from "./YouTubeForm.js";

export default class YouTubeType extends ContentType {

    loadContentType() {

        this.label = "YouTube";
        this.id = "5badc331-f0d1-4f14-8eba-e8468a64b9e3";
        this.form = YouTubeForm;
        this.view = YouTubeView;

    }


}