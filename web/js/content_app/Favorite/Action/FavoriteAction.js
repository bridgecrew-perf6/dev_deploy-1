import ContentAction from "../../../content/Action/ContentAction.js";
import Debug from "../../../core/Debug/Debug.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import StatusInformation from "../../../framework/Information/StatusInformation.js";
import FavoriteActionView from "./FavoriteActionView.js";

export default class FavoriteAction extends ContentAction {

    constructor() {

        super();
        this.label="Favorite";
        this.view=FavoriteActionView;

    }


    onAction(contentId) {

        let service = new ServiceRequest("favorite-post");
        service.addParameter("content", contentId);
        service.sendRequest();
        service.onFinished = function () {
            //(new Debug()).write("finished");

            // (new StatusInformation()).showInformation("Favorite wurde gespeichert.");

        };

    }


    deleteFovorite() {

    }


}