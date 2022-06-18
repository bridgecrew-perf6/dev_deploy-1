import DivContainer from "../../../../html/Content/Div.js";
import FileUploadForm from "../Form/FileUploadForm.js";
import PositionStyle from "../../../../html/Style/Position.js";
import ColorStyle from "../../../../html/Style/Color.js";
import CloseMenuIcon from "../../../../framework/Com/Menu/Icon/CloseMenuIcon.js";
import Debug from "../../../../core/Debug/Debug.js";

export default class FileUploadContainer extends DivContainer {

    onUploadFinished = null;

    //_upload;
    
    serviceName;
    
    parentId;
    
    
    /*
    set serviceName(value) {

       

        //this._upload.render();


    }


    set parentId(value) {

        this._upload.parentId = value;

    }*/


    render() {

        let local = this;

        (new Debug()).write("FileUploadContainer ParentId="+this.parentId);

        let upload = new FileUploadForm(this);
        upload.serviceName = this.serviceName;
        upload.parentId = this.parentId;
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

                if (local.onUploadFinished !== null) {
                    local.onUploadFinished();
                }


            }

        }

        upload.render();

    }

}