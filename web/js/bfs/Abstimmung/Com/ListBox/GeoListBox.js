import DataListBox from "../../../framework/Data/DataListBox.js";

export default class GeoListBox extends DataListBox {


    constructor(parentContainer) {

        super(parentContainer);

        this.service = "abstimmung-geo";
        this.label = "Geo";

    }


    onDataRow(row) {

        this.addItem(row.id, row.geo);

    }

}