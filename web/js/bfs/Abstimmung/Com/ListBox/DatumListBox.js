import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class DatumListBox extends BootstrapDataListBox {


    constructor(parentContainer) {

        super(parentContainer);

        this.service = "abstimmung-datum";
        this.label = "Datum";
        this.defaultEmptyItem=true;

    }


    onDataRow(row) {

        this.addItem(row.id, row.datum_text);

    }


    set jahr(value) {

        this.addParameter("jahr", value);

    }



}