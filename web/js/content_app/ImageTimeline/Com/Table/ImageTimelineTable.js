import ServiceDataTable from "../../../../framework/Data/Table/ServiceDataTable.js";
import AdminButton from "../../../../framework/AdminButton.js";
import ServiceRequest from "../../../../framework/Service/ServiceRequest.js";

export default class ImageTimelineTable extends ServiceDataTable {

    constructor(parentContainer) {

        super(parentContainer);

        this.service = "imagetimeline-list";

        this.onDeleteClick=function (tableRow) {

            let service = new ServiceRequest("imagetimeline-delete");
            service.addParameter("id", dataRow.id);
            service.onFinished = function () {
                local.reloadTable();
            };
            service.sendRequest();

        };

    }


    onHeader(header) {

        header.addText("Timeline");
        header.addText("Image Url");

    }


    onRow(tableRow, dataRow) {

        //let local = this;

        tableRow.addText(dataRow.timeline);
        tableRow.addText(dataRow.image_url);

        tableRow.addData("id", dataRow.id);



        /*
        let btn = new AdminButton(tableRow);
        btn.label="Delete";
        btn.onClick = function () {

            let service = new ServiceRequest("imagetimeline-delete");
            service.addParameter("id", dataRow.id);
            service.onFinished = function () {
                local.reloadTable();
            };
            service.sendRequest();

        };*/

    }

}