import ServiceDataTable from "../../../framework/Data/Table/ServiceDataTable.js";


export default class ShowTable extends ServiceDataTable {

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "srf-show";

    }


    onHeader(header) {
        header.addText("Show");

    }


    onRow(tableRow, dataRow) {

        tableRow.addText(dataRow.show);
        tableRow.addDataAttribute("id", dataRow.id);

    }


}