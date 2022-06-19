import BootstrapDropdown from "../../../framework/Bootstrap/Dropdown/BootstrapDropdown.js";
import RoundshotSearchService from "../../Service/RoundshotSearchService.js";

export default class RoundshotDropdown extends BootstrapDropdown {

    onRoundshot = null;

    render() {

        let local = this;

        this.label="Roundshot";

        let service = new RoundshotSearchService();

        //local.addMenu(dataRow.roundshot, local.onRoundshot(dataRow.id));

        //if (this.onRoundshot !== null) {
            service.onDataRow = function (dataRow) {
                local.addMenu(dataRow.roundshot, local.onRoundshot(dataRow.id));
            };
        //}
        service.sendRequest();

    }

}