import MenuIcon from "../../../framework/Menu/MenuIcon.js";
import GlobalWidgetContainer from "../../../framework/Widget/GlobalWidgetContainer.js";
import FileUploadWidget from "../Widget/FileUploadWidget.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";
import UploadToggleButton from "../Com/Container/UploadToggleButton.js";
import ImageSearchContainer from "../Com/Container/ImageSearchContainer.js";
import SearchImageWidget from "../Widget/SearchImageWidget.js";

export default class ImageSearchMenuIcon extends MenuIcon {

    constructor(parentContainer = null) {

        super(parentContainer);

        this.title = "Image";
        this.icon = "image";

        //let local = this;

        this.onClick = function () {

            /*let container = new ImageSearchContainer();
            //container.heightPercent=100;
            container.render();

            let modal = new AdminModal();
            modal.modalTitle="Image";
            //modal.heightPixel = 600;
            modal.show(container);*/

            GlobalWidgetContainer.addWidget(new SearchImageWidget());

        }

    }

}