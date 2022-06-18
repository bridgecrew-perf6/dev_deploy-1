import ContentView from "../../../content/ContentView.js";
import BootstrapTable from "../../../framework/Bootstrap/Table/BootstrapTable.js";
import LabelValueAdminTable from "../../../framework/Table/LabelValueAdminTable.js";

export default class CalendarView extends ContentView {


    onData(dataRow) {

        let table = new LabelValueAdminTable(this);  // new BootstrapTable(this);
        table.addLabelValue("Date",dataRow.date);
        table.addLabelValue("Time");

    }


}