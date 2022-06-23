import ServiceRequest from "../../framework/Service/ServiceRequest.js";

export default class ShowSearchService extends ServiceRequest {

    constructor() {

        super("srf-show-search");

    }


    set query(value) {
        this.addParameter("q", value);
    }


}