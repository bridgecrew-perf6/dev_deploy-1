import DataListBox from "../../../framework/Data/DataListBox.js";

export default class ShowListBox extends DataListBox {

    constructor(parentContainer) {

        super(parentContainer);
        this.label = "Show";
        this.service = "srf-show";

    }


    onDataRow(row) {

        this.addItem(row.id, row.show);

    }

}

