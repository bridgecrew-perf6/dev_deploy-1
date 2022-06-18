import ContentType from "../../../../content/ContentType.js";
import LocationForm from "./LocationForm.js";
import LocationView from "./LocationView.js";

export default class LocationType extends ContentType {

    constructor() {

        super();

        this.label = "Location";
        this.id = "33e62a5f-6ad1-48db-ad70-d86d516c8098";
        this.form = LocationForm;
        this.view = LocationView;

    }

}