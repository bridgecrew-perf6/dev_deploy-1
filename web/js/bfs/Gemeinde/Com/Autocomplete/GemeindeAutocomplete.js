import AutocompleteTextBox from "../../../../framework/Com/Autocomplete/AutocompleteTextBox.js";
import BootstrapAutocomplete from "../../../../framework/Bootstrap/Autocomplete/BootstrapAutocomplete.js";

export default class GemeindeAutocomplete extends BootstrapAutocomplete {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "gemeinde-gemeinde";
        this.label = "Gemeinde";

    }

}