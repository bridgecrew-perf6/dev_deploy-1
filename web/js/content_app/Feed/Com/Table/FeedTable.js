import BootstrapDataTable from "../../../../framework/Bootstrap/Table/BootstrapDataTable.js";

export default class FeedTable extends BootstrapDataTable {


    constructor(parentContainer) {

        super(parentContainer);
        this.service="feed-list";

    }


    onHeader(header) {

        header.addText("Feed");
        header.addText("Description");

    }


    onRow(tableRow, dataRow) {

        tableRow.addText(dataRow.feed);
        tableRow.addText(dataRow.description);

    }


}