import MenuIcon from "../../../framework/Menu/MenuIcon.js";
import GlobalWidgetContainer from "../../../framework/Widget/GlobalWidgetContainer.js";
import FileUploadWidget from "../Widget/FileUploadWidget.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";
import UploadToggleButton from "../Com/Container/UploadToggleButton.js";
import PolygonAreaMenuIcon from "../../../bim/Poi/Menu/Icon/PolygonAreaMenuIcon.js";

export default class CameraMenuIcon extends MenuIcon {

    constructor(parentContainer = null) {

        super(parentContainer);

        this.label = "Kamera";
        this.icon = "camera";
        this.active=false;

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