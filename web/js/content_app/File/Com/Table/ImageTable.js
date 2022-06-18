import ServiceDataTable from "../../../../framework/Data/Table/ServiceDataTable.js";


export default class ImageTable extends ServiceDataTable {


    loadContainer() {

        super.loadContainer();
        this.service = "file-image-list";

        this.onDeleteClick = function (id) {
          this.removeContainer();
        };

    }


    onHeader(header) {

        header.addText("Image");

    }


    onRow(row, item) {

        row.addText(item.id);

        let img = new AdminImage(row);
        img.src = item.image_url;

    }


}