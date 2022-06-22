import AutocompleteTextBox from "../../../../framework/Com/Autocomplete/AutocompleteTextBox.js";
import BootstrapAutocomplete from "../../../../framework/Bootstrap/Autocomplete/BootstrapAutocomplete.js";
import AdminAutocompleteTextBox from "../../../../framework/Admin/Autocomplete/AdminAutocompleteTextBox.js";

export default class GemeindeAutocomplete extends AdminAutocompleteTextBox {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "gemeinde-gemeinde";
        this.label = "Gemeinde";

    }

}