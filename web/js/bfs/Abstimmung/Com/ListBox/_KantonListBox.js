import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class _KantonListBox extends BootstrapDataListBox {

    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Kanton";
        this.service = "abstimmung-kanton";
        this.defaultEmptyItem = true;

    }


    onDataRow(dataRow) {

        this.addItem(dataRow.id, dataRow.kanton);

    }

}