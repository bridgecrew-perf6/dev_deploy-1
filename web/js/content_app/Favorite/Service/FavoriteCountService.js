import ServiceRequest from "../../../framework/Service/ServiceRequest.js";

export default class FavoriteCountService extends ServiceRequest {


    constructor() {

        super("favorite-count");

    }

    set contentId(value) {
        this.addParameter("content", value);
    }

}