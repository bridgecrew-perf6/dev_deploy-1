import DivContainer from "../../../../html/Content/Div.js";
import ProgressBar from "../../../../framework/Com/ProgressBar.js";
import FileInputContainer from "../../../../html/Form/FileInput.js";
import ServiceRequest from "../../../../framework/Service/ServiceRequest.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";
import TimerEvent from "../../../../core/Timer/TimerEvent.js";
import ColorStyle from "../../../../html/Style/Color.js";
import PositionStyle from "../../../../html/Style/Position.js";
import LabelContainer from "../../../../html/Form/Label.js";
import CursorStyle from "../../../../html/Style/Cursor.js";
import UploadMenuIcon from "../../../../framework/Com/Menu/Icon/UploadMenuIcon.js";
import BootstrapIcon from "../../../../framework/Package/BootstrapIcon/BootstrapIcon.js";
import MenuConfig from "../../../../framework/Com/Menu/MenuConfig.js";
import Debug from "../../../../core/Debug/Debug.js";

export default class FileUploadForm extends DivContainer {

    _upload;

    _fileInput;

    _uploadInfo;

    accept;

    serviceName;

    parentId;

    // onUploadFile
    onUpload = null;

    onUploadBegin = null;

    onFinished = null;


    render() {

        //(new Debug()).write("parent id (File Upload Form)="+this.parentId);

        let parentIdTmp = this.parentId;

        /*let p = new ParagraphContainer(this);
        p.text= "parent id (File Upload Form)="+parentIdTmp;  // this.parentId;*/


        let local = this;

        this._upload = new DivContainer(this);

        let label = new LabelContainer(this._upload);
        label.htmlFor = "upload";

        let icon = new BootstrapIcon(label);
        icon.icon="upload";
        icon.title="Upload";
        icon.fontSizePixel = MenuConfig.iconSize;
        icon.cursor = CursorStyle.POINTER;

        this._fileInput = new FileInputContainer(this._upload);
        this._fileInput.multiple = true;
        this._fileInput.id = "upload";
        this._fileInput.opacity = 0;
        this._fileInput.widthPixel = 0.1;
        this._fileInput.heightPixel = 0.1;
        this._fileInput.position = PositionStyle.ABSOLUTE;
        this._fileInput.accept = this.accept;
        this._fileInput.onChange = function () {

            if (local.onUploadBegin !== null) {
                local.onUploadBegin();
            }

            local._uploadInfo.visible = true;
            local._upload.visible = false;

            let maxFile = 5;
            let currentFile = 0;
            let i = 0;
            let fileTotal = local._fileInput._htmlElement.files.length;
            let fileFinished = 0;

            let delay = new TimerEvent();
            delay.intervall = 200;
            delay.onTime = function () {

                if ((currentFile < maxFile) && (i < fileTotal)) {

                    let file = local._fileInput._htmlElement.files.item(i);

                    i++;
                    currentFile++;

                    let service = new ServiceRequest(local.serviceName);
                    service.addFile("file", file);

                    (new Debug()).write("parent id upload "+parentIdTmp);

                    if (parentIdTmp!==null) {
                        service.addParameter("parent", parentIdTmp);
                    }

                    service.onDataRow = function (data) {

                        if (local.onUpload !== null) {
                            local.onUpload(data);
                        }

                        status.text = file.name;

                        currentFile--;
                        fileFinished++;

                        progross.value = Math.round((fileFinished / fileTotal) * 100);
                        progressCount.text = fileFinished + " / " + fileTotal;

                        if (fileFinished === i) {

                            local._fileInput.clearInput();

                            status.text = "Upload finished";
                            delay.stop();
                            if (local.onFinished !== null) {
                                local.onFinished();
                            }

                        }

                    }

                    service.sendRequest();

                }

            };

            delay.start();

        };

        this._uploadInfo = new DivContainer(this);
        this._uploadInfo.visible = false;

        let progross = new ProgressBar(this._uploadInfo);
        progross.value = 0;

        let status = new ParagraphContainer(this._uploadInfo);
        let progressCount = new ParagraphContainer(this._uploadInfo);

    }


    /*set accept(value) {

        this._fileInput.accept = value;

    }*/


    restoreUploadForm() {

        this.backgroundColor = "";
        this._uploadInfo.visible = false;
        this._upload.visible = true;

    }

}