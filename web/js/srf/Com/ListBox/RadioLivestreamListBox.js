import DataListBox from "../../../framework/Data/DataListBox.js";
import OptionContainer from "../../../html/Form/Select/Option.js";

export default class RadioLivestreamListBox extends DataListBox {

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

        //this._select.addContainer(option);

    }

}

