import MenuIcon from "../../../framework/Menu/MenuIcon.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";
import UploadToggleButton from "../Com/Container/UploadToggleButton.js";

export default class FileUploadMenuIcon extends MenuIcon {

    constructor(parentContainer = null) {

        super(parentContainer);

        this.label = "Upload";
        this.icon = "arrow-bar-up";
        //this.active=false;

        this.onClick = function () {

            let container = new UploadToggleButton();
            container.render();

            let modal = new AdminModal();
            modal.modalTitle="Upload";
            modal.show(container);

            //GlobalWidgetContainer.addWidget(new FileUploadWidget);

        }

    }

}