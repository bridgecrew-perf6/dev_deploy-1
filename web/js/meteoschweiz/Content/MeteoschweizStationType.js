import ContentType from "../../content/ContentType.js";
import MeteoschweizStationView from "./MeteoschweizStationView.js";

export default class MeteoschweizStationType extends ContentType {

    loadContentType() {
        this.label = "Meteoschweiz Station";
        this.id = "bc9beb02-5609-45be-9f0d-73009369c9a4";
        this.view = MeteoschweizStationView;
    }


}