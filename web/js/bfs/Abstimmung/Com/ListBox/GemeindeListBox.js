import DataListBox from "../../../framework/Data/DataListBox.js";
import GeoListBox from "./GeoListBox.js";

export default class GemeindeListBox extends GeoListBox {


    constructor(parentContainer) {

        super(parentContainer);

        this.addParameter("level",4);
        this.label = "Gemeinde";

    }


    onDataRow(row) {

        this.addItem(row.id, row.geo);

    }


    set kanton(value) {

        this.addParameter("level", value);


    }



}