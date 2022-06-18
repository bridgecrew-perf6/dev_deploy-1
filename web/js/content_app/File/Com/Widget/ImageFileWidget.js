import AdminWidget from "../../../framework/Widget/AdminWidget.js";
import ImageContainer from "../../../html/Image/Image.js";
import HyperlinkContainer from "../../../html/Hyperlink/Hyperlink.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";
import ButtonContainer from "../../../html/Form/Button.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import Debug from "../../../core/Debug/Debug.js";


export default class ImageFileWidget extends AdminWidget {

    dataRow;




    render() {

        let local = this;


        this.widgetTitle = this.dataRow.filename;


        let img = new ImageContainer(this);
        img.addCssClass("mouse-clickable");
        img.width = 400;
        img.src = this.dataRow.image_url_small;
        img.onClick = function () {

            let imgLarge = new ImageContainer();
            imgLarge.src = local.dataRow.image_url_large;
            imgLarge.addCssClass("mouse-clickable");
            imgLarge.addCssClass("nemundo-image");

            let modal = new AdminModal();
            modal.show(imgLarge);

        }

        let hyperlink = new HyperlinkContainer(this);
        hyperlink.text = "Download";
        hyperlink.href = this.dataRow.image_url;
        hyperlink.addAttribute("download", this.dataRow.filename);

        let btn = new FavoriteButton(this);
        btn.contentId = this.dataRow.id;
        btn.render();

        let deleteBtn = new ButtonContainer(this);
        deleteBtn.label = "Delete";
        deleteBtn.onClick = function () {

            let service = new ServiceRequest("image-delete");
            service.addParameter("id", local.dataRow.id);
            service.sendRequest();
            service.onFinished = function () {
                (new Debug()).write("image delete");

                local.removeContainer();

            }

        };


        this.addActionMenu("Download", function () {

        });

        this.addActionMenu("Delete", function () {

            let service = new ServiceRequest("image-delete");
            service.addParameter("id", local.dataRow.id);
            service.sendRequest();
            service.onFinished = function () {
                (new Debug()).write("image delete");

                local.removeContainer();

            }

        });

        this.addActionMenu("Rename", function () {

        });


        // rename


    }


}