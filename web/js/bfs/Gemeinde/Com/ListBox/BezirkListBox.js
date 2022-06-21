import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class BezirkListBox extends BootstrapDataListBox {


    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Bezirk";
        this.service = "gemeinde-bezirk";
        this.defaultEmptyItem = true;

    }


    onDataRow(dataRow) {

        this.addItem(dataRow.id, dataRow.word);

    }


    set kantonId(value) {

        this.addParameter("kanton", value);

    }


    // kantonAbk
    set kantonKuerzel(value) {

        this.addParameter("kanton-kuerzel", value);

    }



}