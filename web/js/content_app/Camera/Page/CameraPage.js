import BootstrapPage from "../../../framework/Bootstrap/Page/BootstrapPage.js";
import CameraForm from "../Content/CameraForm.js";
import CameraTable from "../Com/Table/CameraTable.js";

export default class CameraPage extends BootstrapPage {


    constructor(parentContainer) {

        super(parentContainer);
        this.pageTitle = "Camera";
        this.pageUrl = "camera";

    }


    render() {

        let form = new CameraForm(this);
        form.onAfterSubmit = function () {
            form.clearForm();
            table.reloadData();
        };
        form.render();

        let table = new CameraTable(this);
        table.render();

    }


}