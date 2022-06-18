import ListServiceRequest from "../../framework/Service/ListServiceRequest.js";

export default class MesswertLatestService extends ListServiceRequest {

    constructor() {

        super();
        this.service = "meteoschweiz-messwert-latest";

    }


    set stationId(value) {

        this.addParameter("station", value);

    }

}