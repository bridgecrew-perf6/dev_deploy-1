import ContentType from "../../../content/ContentType.js";
import SrfVideoView from "./SrfVideoView.js";

export default class SrfVideoType extends ContentType {

    loadContentType() {

        this.label = "SRF Video";
        this.id = "5a89df1d-af07-4400-9a8c-9a3d7c3815b9";
        this.view = SrfVideoView;

    }

}