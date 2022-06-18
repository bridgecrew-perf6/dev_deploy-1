import MenuIcon from "../../../framework/Menu/MenuIcon.js";

export default class FileUploadIcon extends MenuIcon {

    constructor(parentContainer = null) {

        super(parentContainer);

        this.label = "File Upload";
        this.icon="plus-lg";

    }

}