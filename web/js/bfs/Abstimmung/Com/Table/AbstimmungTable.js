import BootstrapDataTable from "../../../../framework/Bootstrap/Table/BootstrapDataTable.js";


export default class AbstimmungTable extends BootstrapDataTable {

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "abstimmung-abstimmung";

    }


    onHeader(header) {

        header.addText("Datum");
        header.addText("Abstimmung");

    }


    onRow(tableRow, dataRow) {

        tableRow.addText(dataRow.datum_text);
        tableRow.addText(dataRow.abstimmung);

    }


    set datum(value) {

        this.addParameter("datum-iso", value);

    }


}