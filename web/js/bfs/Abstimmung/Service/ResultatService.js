import ServiceRequest from "../../framework/Service/ServiceRequest.js";

export default class ResultatService extends ServiceRequest {

    constructor() {

        super();
        this.service="abstimmung-resultat";

    }



    set abstimmungId(value) {

        this.addParameter("abstimmung",value);

    }


    set geoLevelId(value) {

        this.addParameter("level",value);

    }


    set kantonId(value) {

        this.addParameter("kanton",value);

    }



}