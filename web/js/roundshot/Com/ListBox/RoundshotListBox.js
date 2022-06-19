import BootstrapDataListBox from "../../../framework/Bootstrap/Data/BootstrapDataListBox.js";


export default class RoundshotListBox extends BootstrapDataListBox {

    constructor(parentContainer) {

        super(parentContainer);
        this.label = "Roundshot";
        this.service = "roundshot-search";

    }


    onDataRow(dataRow) {
        super.onDataRow(dataRow);
        this.addItem(dataRow.id, dataRow.roundshot);
    }


}