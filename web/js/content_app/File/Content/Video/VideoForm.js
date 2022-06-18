import FileAccept from "../../../../html/Form/Input/FileAccept.js";
import FileForm from "../File/FileForm.js";

export default class VideoForm extends FileForm {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "video-post";
        this.accept = FileAccept.VIDEO;

    }

}
