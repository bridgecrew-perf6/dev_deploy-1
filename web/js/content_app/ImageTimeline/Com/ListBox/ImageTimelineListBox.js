import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class ImageTimelineListBox extends BootstrapDataListBox {

    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Timeline";
        this.service = "imagetimeline-list";

    }


    onDataRow(dataRow) {

        this.addItem(dataRow.data_id, dataRow.timeline);

    }

}