import ServiceRequest from "../../framework/Service/ServiceRequest.js";

export default class FraktionService extends ServiceRequest {

    constructor() {

        super("parlament-fraktion");
        this.sendRequest();

    }

}