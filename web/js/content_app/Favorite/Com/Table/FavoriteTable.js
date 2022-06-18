import ServiceRequest from "../../../../framework/Service/ServiceRequest.js";
import BootstrapDataTable from "../../../../framework/Bootstrap/Table/BootstrapDataTable.js";


export default class FavoriteTable extends BootstrapDataTable {

    constructor(parentContainer) {

        super(parentContainer);

        this.service = "favorite-list";
        this.showEditIcon = false;

        this.onDeleteClick = function (dataRow) {

            let service = new ServiceRequest("favorite-delete");
            service.addParameter("favorite", dataRow.favorite_id);
            service.sendRequest();

        };

    }


    onHeader(header) {

        header.addText("Favorite/Subject");

    }


    onRow(tableRow, dataRow) {

        tableRow.addText(dataRow.subject);

    }

}