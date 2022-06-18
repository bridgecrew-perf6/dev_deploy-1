import ServiceDataTable from "../../../../framework/Data/Table/ServiceDataTable.js";
import AdminImage from "../../../../framework/Image/AdminImage.js";
import BootstrapDataTable from "../../../../framework/Bootstrap/Table/BootstrapDataTable.js";

export default class CameraTable extends BootstrapDataTable {

    constructor(parentContainer) {

        super(parentContainer);
        this.service="camera-search";

    }


    onHeader(header) {

        header.addText("Image");
        header.addText("Camera");
        header.addText("Geo Coordinate");

    }


    onRow(tableRow, dataRow) {

        //tableRow.addText(dataRow.id);

        let img = new AdminImage(tableRow);
        img.src = dataRow.image_url;
        img.onClick = function () {

        };

        tableRow.addText(dataRow.camera);
        tableRow.addText(dataRow.geo_coordinate.lat+"/"+dataRow.geo_coordinate.lon);
        //tableRow.addText(dataRow.geo_coordinate.lon);



    }

}