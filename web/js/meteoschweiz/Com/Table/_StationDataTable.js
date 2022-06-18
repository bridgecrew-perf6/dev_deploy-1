import _AdminDataTable from "../../framework/Table/AdminDataTable.js";

export default class _StationDataTable extends _AdminDataTable {


    constructor(parentContainer) {

        super(parentContainer);

        this.service="meteoschweiz-station";

    }


    onHeader(header) {

        header.addText("Station");
        header.addText("Code");

    }


    onRow(row, item) {

        row.addText(item.station);
        row.addText(item.station_code);

    }



}