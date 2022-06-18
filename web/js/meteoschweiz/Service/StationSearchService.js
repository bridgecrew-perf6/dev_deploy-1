import ServiceRequest from "../../framework/Service/ServiceRequest.js";
import ListServiceRequest from "../../framework/Service/ListServiceRequest.js";

export default class StationSearchService extends ListServiceRequest {

    constructor() {

        super("meteoschweiz-station-search");

    }


    set query(value) {

        this.addParameter("q", value);

    }

}