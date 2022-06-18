import ServiceRequest from "../../../framework/Service/ServiceRequest.js";

export default class LocationService extends ServiceRequest {

    constructor() {
        super("location-post");
    }


    set location(value) {
        this.addParameter("location",value);
    }

    set lat(value) {
        this.addParameter("lat",value);
    }

    set lon(value) {
        this.addParameter("lon",value);
    }


}