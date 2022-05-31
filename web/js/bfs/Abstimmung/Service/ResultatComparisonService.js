import ServiceRequest from "../../framework/Service/ServiceRequest.js";

export default class ResultatComparisonService extends ServiceRequest {

    constructor() {

        super();
        this.service = "abstimmung-resultat-comparison";

    }


    set abstimmung1Id(value) {

        this.addParameter("abstimmung-1", value);

    }


    set abstimmung2Id(value) {

        this.addParameter("abstimmung-2", value);

    }


    set geoLevelId(value) {

        this.addParameter("level", value);

    }


    set kantonId(value) {

        this.addParameter("kanton", value);

    }


}