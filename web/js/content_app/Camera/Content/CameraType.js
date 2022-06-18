import ContentType from "../../../content/ContentType.js";
import CameraForm from "./CameraForm.js";
import CameraView from "./CameraView.js";

export default class CameraType extends ContentType {

    constructor() {

        super();

        this.label = "Camera";
        this.id = "d7ce44a9-7a62-4c88-9e48-7859df3de1b2";
        this.form = CameraForm;
        this.view = CameraView;

    }

}