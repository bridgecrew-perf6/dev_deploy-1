import ContentType from "../../../content/ContentType.js";
import ImageTimelineForm from "./ImageTimelineForm.js";
import ImageTimelineView from "./ImageTimelineView.js";

export default class ImageTimelineType extends ContentType {

    loadContentType() {

        this.label = "Image Timeline";
        this.id = "63e62295-48a6-41ae-b431-022682ea485c";
        this.form = ImageTimelineForm;
        this.view = ImageTimelineView;

    }

}