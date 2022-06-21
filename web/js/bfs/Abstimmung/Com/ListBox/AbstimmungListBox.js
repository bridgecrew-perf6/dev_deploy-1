import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";
import AdminDataListBox from "../../../../framework/Admin/Form/AdminDataListBox.js";

export default class AbstimmungListBox extends AdminDataListBox {  // BootstrapDataListBox {

    constructor(parentContainer) {

        super(parentContainer);

        this.service = "abstimmung-abstimmung";
        this.label = "Abstimmung";
        this.defaultEmptyItem = true;

    }


    onDataRow(row) {

        this.addItem(row.id, row.abstimmung);

    }


    set jahr(value) {

        this.addParameter("jahr", value);

    }


    set datumId(value) {

        this.addParameter("datum", value);

    }




}