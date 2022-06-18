import ServiceRequest from "../../../framework/Service/ServiceRequest.js";

export default class FavoritePostService extends ServiceRequest {

    constructor() {

        super("favorite-post");

    }


    set contentId(value) {

        this.addParameter("content", value);

    }

}