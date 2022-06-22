

export default class GemeindeAutocomplete extends BoostrapAuto AdminAutocompleteTextBox {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "abstimmung-gemeinde";
        this.label = "Gemeinde";

    }

}