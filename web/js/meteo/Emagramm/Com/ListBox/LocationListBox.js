import DataListBox from "../../../../framework/Data/DataListBox.js";
import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class LocationListBox extends BootstrapDataListBox {   // DataListBox {

    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Location";
        this.service = "emagramm-location";


        let local = this;


        this.onDataRow = function (item) {

            local.addItem(item.id, item.location);

        };

        this.render();

    }


}