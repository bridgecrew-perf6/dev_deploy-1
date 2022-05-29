import DataListBox from "../../../framework/Data/DataListBox.js";
import BootstrapDataListBox from "../../../framework/Bootstrap/Data/BootstrapDataListBox.js";

export default class ContentTypeDataListBox extends BootstrapDataListBox {

    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Content Type";
        this.service = "content-contenttype-list";

    }


    onDataRow(dataRow) {

        this.addItem(dataRow.id, dataRow.content_type);

    }


    set applicationId(value) {
        this.addParameter("application",value);
    }


}