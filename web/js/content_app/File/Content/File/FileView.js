import ContentView from "../../../../content/ContentView.js";
import LabelValueAdminTable from "../../../../framework/Table/LabelValueAdminTable.js";
import DownloadMenuIcon from "../../../../framework/Com/Menu/Icon/DownloadMenuIcon.js";


export default class FileView extends ContentView {

    onData(data) {

        let table = new LabelValueAdminTable(this);
        table.addLabelValue("Filename", data.filename);
        table.addLabelValue("Filesize", data.filesize_text);

        let download = new DownloadMenuIcon(this);
        download.downloadUrl = data.url;

    }

}
