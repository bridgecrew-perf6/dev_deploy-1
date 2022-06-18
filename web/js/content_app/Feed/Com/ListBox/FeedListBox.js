import BootstrapDataListBox from "../../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class FeedListBox extends BootstrapDataListBox {  // DataListBox {

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "feed-list";
        this.label = "Feed";

    }


    onDataRow(dataRow) {
        this.addItem(dataRow.id, dataRow.feed);
    }


}