import AutocompleteTextBox from "../../../framework/Com/Autocomplete/AutocompleteTextBox.js";
import BootstrapAutocomplete from "../../../framework/Bootstrap/Autocomplete/BootstrapAutocomplete.js";

export default class StationAutocomplete extends BootstrapAutocomplete {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "meteoschweiz-station-word";

    }

}