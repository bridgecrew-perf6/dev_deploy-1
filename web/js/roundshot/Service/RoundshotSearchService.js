import ServiceRequest from "../../framework/Service/ServiceRequest.js";
import ListServiceRequest from "../../framework/Service/ListServiceRequest.js";

export default class RoundshotSearchService extends ListServiceRequest {

    constructor() {
        super();
        this.service = "roundshot-search";
    }

}