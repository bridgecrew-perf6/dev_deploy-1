import ImageContainer from "../../html/Image/Image.js";
import AdminModal from "../Com/Modal/AdminModal.js";
import CursorStyle from "../../html/Style/Cursor.js";
import Debug from "../../core/Debug/Debug.js";


// ResponsiveImage
export default class AdminImage extends ImageContainer {


    imageLarge = null;

    label = "";


    constructor(parentContainer) {

        super( parentContainer);
        this.widthPercent=100;

    }


    render() {

        let local = this;



        /*let imageLargeSrc = local.imageLarge;
        if (imageLargeSrc === null) {
            imageLargeSrc = this.src;
        }*/

        this.onClick = function () {

            let imgLarge = new ImageContainer();
            imgLarge.src = local.imageLarge;  // imageLargeSrc;
            imgLarge.widthPercent = 80; // 100;
            imgLarge.heightPercent = 80;  // 100;
            imgLarge.render();

            let modal = new AdminModal();
            modal.modalTitle = local.label;
            modal.fullPage = true;
            modal.show(imgLarge);

        }

        this.onMouseEnter = function () {
            local.cursor = CursorStyle.POINTER;
        };


    }


}