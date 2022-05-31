import ContentType from "../../../../content/ContentType.js";
import AbstimmungView from "./AbstimmungView.js";

export default class AbstimmungType extends ContentType {

    loadContentType() {

        this.label = "Abstimmung";
        this.id = "b0ac4615-1c6e-4200-887c-27c481fb4416";
        this.view = AbstimmungView;
        //this.search=RoundshotSearch;

    }


}