import WidgetContainer from "../../../../framework/Com/Widget/Widget.js";
import CameraForm from "../../Content/CameraForm.js";
import CameraTable from "../Table/CameraTable.js";

export default class CameraWidget extends WidgetContainer {


    constructor(parentContainer) {

        super(parentContainer);

        this.widgetTitle = "Camera";
        this.widgetIcon = "camera";

    }


    render() {


        this.scrollWidget=true;

        let form = new CameraForm(this);
        form.onAfterSubmit = function () {
            table.reloadData();
        };
        form.render();


        let table = new CameraTable(this);
        table.maxHeightPercent=100;
        table.render();


    }


}