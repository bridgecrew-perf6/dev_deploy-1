import BootstrapDataTable from "../../../framework/Bootstrap/Table/BootstrapDataTable.js";
import AdminDataTable from "../../../framework/Admin/Table/AdminDataTable.js";

export default class ContentTable extends AdminDataTable {

    showContentType = true;

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "content-search";
        this.paginationLimit = 50;

    }


    onHeader(header) {

        header.addText("Subject");
        //if (this.showContentType) {
            //header.addText("Content Type");
        header.addText("Type");
        //}
        //header.addEmpty();

    }


    onRow(tableRow, dataRow) {

        tableRow.addText(dataRow.subject);
        if (this.showContentType) {
            tableRow.addText(dataRow.content_type);
        }

    }


    set contentTypeId(value) {

        this.addParameter("content-type", value);

    }

    set query(value) {
        this.addParameter("q", value);
    }

}




