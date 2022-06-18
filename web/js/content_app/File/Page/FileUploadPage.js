import FileUploadForm from "../Com/Form/FileUploadForm.js";
import IconPageContainer from "../../../framework/Page/IconPageContainer.js";
import PositionStyle from "../../../html/Style/Position.js";
import ColorStyle from "../../../html/Style/Color.js";
import CloseMenuIcon from "../../../framework/Com/Menu/Icon/CloseMenuIcon.js";
import FileUploadContainer from "../Com/Container/FileUploadContainer.js";

export default class FileUploadPage extends IconPageContainer {

    constructor(parentContainer) {

        super(parentContainer);

        this.pageTitle = "File Upload";
        this.pageIcon = "plus-lg";

    }


    render() {


        let container= new FileUploadContainer(this);
        container.serviceName= "file-upload";
        container.render();



        /*
        let upload = new FileUploadForm(this);
        upload.serviceName = "file-upload";

        upload.onUploadBegin = function () {

            upload.position = PositionStyle.FIXED;
            upload.rightPixel = 30;
            upload.topPixel = 100;
            upload.zIndex = 2000;
            upload.widthPixel = 300;
            upload.backgroundColor = ColorStyle.LIGHT_GREY;
            upload.borderColor = ColorStyle.BLACK;
            upload.onFinished = function () {

                let close = new CloseMenuIcon(upload);
                close.onClick = function () {

                    upload.position = "";
                    upload.rightPixel = "";
                    upload.topPixel = "";
                    upload.zIndex = "";
                    upload.widthPixel = "";

                    upload.restoreUploadForm();

                    close.removeContainer();

                }

            }

        }

        upload.render();*/

    }

}