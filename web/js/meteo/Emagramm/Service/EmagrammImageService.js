import ServiceRequest from "../../../framework/Service/ServiceRequest.js";

export default class EmagrammImageService extends ServiceRequest {

    constructor() {
        super("emagramm-image");
    }

    set locationId(value) {
        this.addParameter("location", value);
    }

}