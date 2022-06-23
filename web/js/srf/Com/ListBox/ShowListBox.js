import AdminDataListBox from "../../../framework/Admin/Form/AdminDataListBox.js";

export default class ShowListBox extends AdminDataListBox {

    constructor(parentContainer) {

        super(parentContainer);
        this.label = "Show";
        this.service = "srf-show";

    }


    onDataRow(row) {

        this.addItem(row.id, row.show);

    }

}

