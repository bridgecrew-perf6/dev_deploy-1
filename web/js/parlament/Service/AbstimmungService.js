import ServiceRequest from "../../framework/Service/ServiceRequest.js";
import ListServiceRequest from "../../framework/Service/ListServiceRequest.js";

export default class AbstimmungService extends ListServiceRequest {

    constructor() {

        super("parlament-abstimmung");
        //this.sendRequest();

    }

}