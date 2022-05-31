import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class KantonListBox extends BootstrapDataListBox {

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