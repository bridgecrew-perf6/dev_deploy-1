import GeoLevelType from "../../Type/GeoLevelType.js";
import AdminListBox from "../../../../framework/Admin/Form/AdminListBox.js";

export default class GeoLevelListBox extends AdminListBox {

    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Stufe";  // = "Geo Level";

        //this.addItem(GeoLevelType.LAND, "Land");
        this.addItem(GeoLevelType.BUND, "Bund");
        this.addItem(GeoLevelType.KANTON, "Kanton");
        this.addItem(GeoLevelType.BEZIRK, "Bezirk");
        this.addItem(GeoLevelType.GEMEINDE, "Gemeinde");

    }

}