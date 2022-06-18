import ContentView from "../../../../content/ContentView.js";
import LabelValueAdminTable from "../../../../framework/Table/LabelValueAdminTable.js";
import SearchChMapContainer from "../../../Map/Com/SearchChMapContainer.js";

export default class AddressView extends ContentView {

    onData(dataRow) {

        this.widthPercent=100;
        this.heightPercent=100;

        let table = new LabelValueAdminTable(this);
        table.addLabelValue("Street", dataRow.street);
        table.addLabelValue("Place", dataRow.place);

        let map = new SearchChMapContainer(this);
        map.widthPercent = 100;
        map.heightPixel=500;
        //map.heightPercent = 100;
        map.ort = dataRow.street + "," + dataRow.place;
        map.render();

    }

}