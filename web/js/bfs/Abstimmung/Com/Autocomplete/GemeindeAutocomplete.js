

export default class GemeindeAutocomplete extends BoostrapAuto AdminAutocomplete {

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "abstimmung-gemeinde";
        this.label = "Gemeinde";

    }

}