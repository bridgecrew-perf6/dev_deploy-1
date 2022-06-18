import ContentType from "../../../../content/ContentType.js";
import VideoView from "./VideoView.js";
import VideoForm from "./VideoForm.js";

export default class VideoType extends ContentType {

    loadContentType() {
        this.label = "Video";
        this.id = "60a074d7-15f1-44fb-8a87-1900862da3ed";
        this.view = VideoView;
        this.form = VideoForm;
    }

}