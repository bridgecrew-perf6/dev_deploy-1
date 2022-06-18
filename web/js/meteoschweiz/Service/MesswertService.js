import ListServiceRequest from "../../framework/Service/ListServiceRequest.js";

export default class MesswertService extends ListServiceRequest {

    constructor() {

        super();

        this.service="meteoschweiz-messwert";


    }


    set stationId(value) {

        this.addParameter("station", value);

    }

}