import ServiceRequest from "../../framework/Service/ServiceRequest.js";

export default class AbstimmungService extends ServiceRequest {

    constructor() {

        super("parlament-abstimmung");
        this.sendRequest();

    }

}