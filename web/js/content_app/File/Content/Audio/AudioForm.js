import FileForm from "../File/FileForm.js";
import FileAccept from "../../../../html/Form/Input/FileAccept.js";

export default class AudioForm extends FileForm {

    constructor(parentContainer) {

        super(parentContainer);
        this.accept = FileAccept.AUDIO;

    }

}
