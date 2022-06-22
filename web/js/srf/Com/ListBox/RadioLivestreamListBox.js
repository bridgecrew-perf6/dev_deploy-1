import DataListBox from "../../../framework/Data/DataListBox.js";
import OptionContainer from "../../../html/Form/Select/Option.js";
import AdminDataListBox from "../../../framework/Admin/Form/AdminDataListBox.js";

export default class RadioLivestreamListBox extends AdminDataListBox {

    constructor(parentContainer) {

        super(parentContainer);
        this.label = "Radio Livestream";
        this.service = "srf-livestream-radio";

        this.defaultEmptyItem=true;

    }


    onDataRow(dataRow) {

        let option = new OptionContainer();
        option.label = dataRow.livestream;
        option.id = dataRow.id;
        option.addDataAttribute("livestream", dataRow.livestream);
        option.addDataAttribute("urn", dataRow.urn);
        this.addOption(option);

    }

}

