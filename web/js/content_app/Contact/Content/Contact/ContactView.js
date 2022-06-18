import ContentView from "../../../../content/ContentView.js";
import LabelValueAdminTable from "../../../../framework/Table/LabelValueAdminTable.js";

export default class ContactView extends ContentView {

    onData(dataRow) {

        let table = new LabelValueAdminTable(this);
        table.addLabelValue("Company",dataRow.company);
        table.addLabelValue("Last Name",dataRow.last_name);
        table.addLabelValue("First Name",dataRow.first_name);
        table.addLabelValue("Phone",dataRow.phone);
        table.addLabelValue("eMail",dataRow.email);

    }

}