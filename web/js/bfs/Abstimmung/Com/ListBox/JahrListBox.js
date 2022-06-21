import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";
import AdminDataListBox from "../../../../framework/Admin/Form/AdminDataListBox.js";

export default class JahrListBox extends AdminDataListBox {  // BootstrapDataListBox {


    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Jahr";
        this.service = "abstimmung-jahr";
        this.defaultEmptyItem = true;

    }

    onDataRow(row) {

        this.addItem(row.jahr, row.jahr);

    }


}