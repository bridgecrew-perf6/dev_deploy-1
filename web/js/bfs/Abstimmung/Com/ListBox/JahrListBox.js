import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class JahrListBox extends BootstrapDataListBox {


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