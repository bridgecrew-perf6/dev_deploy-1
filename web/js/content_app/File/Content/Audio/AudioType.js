import ContentType from "../../../../content/ContentType.js";
import AudioView from "./AudioView.js";
import AudioForm from "./AudioForm.js";

export default class AudioType extends ContentType {

    loadContentType() {
        this.label = "Audio";
        this.id = "10039af8-4345-4019-89f7-aa3c030475fc";
        this.view = AudioView;
        this.form = AudioForm;
    }

}

