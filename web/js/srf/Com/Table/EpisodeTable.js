import ServiceDataTable from "../../../framework/Data/Table/ServiceDataTable.js";
import DateFormat from "../../../core/Date/DateFormat.js";

export default class EpisodeTable extends ServiceDataTable {   // AdminDataTable {

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "srf-episode";
        /*this.showEditIcon = false;
        this.showDeleteIcon = false;*/

    }


    onHeader(header) {

        header.addText("Title");
        header.addText("Date/Time");
        /*header.addText("Description");
        header.addText("Date/Time");*/

    }

    onRow(row, item) {

        row.addText(item.title);
        row.addText((new DateFormat(item.datetime) ).getGermanDate());

        row.addData("id", item.id);
        row.addData("urn", item.urn);

    }


    set showId(showId) {
        this.addParameter("show", showId);
        this.reloadData();

    }


}