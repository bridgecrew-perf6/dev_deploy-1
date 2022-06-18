import UploadToggleButton from "../../Com/Container/UploadToggleButton.js";
import ViewWidgetContainer from "../../../../framework/Com/Widget/ViewWidget.js";
import UrlFileForm from "../Form/UrlFileForm.js";

export default class FileUploadWidget extends ViewWidgetContainer {


    constructor(parentContainer) {

        super(parentContainer);

        this.widgetTitle = "File Upload";
        this.widgetIcon = "upload";

    }


    render() {

        let container = new UploadToggleButton(this);
        container.render();

        let urlForm=new UrlFileForm(this);
        urlForm.render();


    }

}