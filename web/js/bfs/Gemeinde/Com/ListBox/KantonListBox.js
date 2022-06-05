import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";
import AdminDataListBox from "../../../../framework/Admin/Form/AdminDataListBox.js";

export default class KantonListBox extends AdminDataListBox {   // BootstrapDataListBox {

    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Kanton";
        this.service = "gemeinde-kanton";
        this.defaultEmptyItem = true;

    }


    onDataRow(dataRow) {

        this.addItem(dataRow.id, dataRow.kanton);

    }

}