import BootstrapDataTable from "../../../framework/Bootstrap/Table/BootstrapDataTable.js";
import TableSorting from "../../../framework/Data/Table/TableSorting.js";

export default class MeteoschweizStationTable extends BootstrapDataTable {


    constructor(parentContainer) {

        super(parentContainer);
        this.service = "meteoschweiz-station-search"

    }

    onHeader(header) {

        header.addText("Station");
        header.addContainer(this.getSortingHyperlink("Station Code", "station_code"));
        header.addContainer(this.getSortingHyperlink("Altitude", "altitude", TableSorting.DESC));

    }


    onRow(tableRow, dataRow) {

        tableRow.addText(dataRow.station);
        tableRow.addText(dataRow.station_code);
        tableRow.addText(dataRow.altitude);

    }


}