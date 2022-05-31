import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class GemeindeListBox extends BootstrapDataListBox {

    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Gemeinde";
        this.service="gemeinde-gemeinde";
        this.defaultEmptyItem = true;

    }


    onDataRow(dataRow) {
        //this.addItem(dataRow.id,dataRow.gemeinde);
        this.addItem(dataRow.id,dataRow.word);
    }


    set kantonKuerzel(value) {

        this.addParameter("kanton-kuerzel", value);

    }


    set kanton(value) {

        this.addParameter("kanton", value);

    }

    set bezirk(value) {

        this.addParameter("bezirk", value);

    }

}