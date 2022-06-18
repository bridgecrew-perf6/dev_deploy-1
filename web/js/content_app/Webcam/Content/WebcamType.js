import ContentType from "../../../content/ContentType.js";
import WebcamForm from "./WebcamForm.js";
import WebcamView from "./WebcamView.js";

export default class WebcamType extends ContentType {

    loadContentType() {

        this.label = "Webcam";
        this.id = "5bb3d1d4-3866-4c7e-83f4-572a9c00c9e5";
        this.form = WebcamForm;
        this.view = WebcamView;

    }

}