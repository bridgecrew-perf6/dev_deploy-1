import ContentView from "../../../../content/ContentView.js";
import LabelValueAdminTable from "../../../../framework/Table/LabelValueAdminTable.js";
import DownloadMenuIcon from "../../../../framework/Com/Menu/Icon/DownloadMenuIcon.js";
import PdfObjectContainer from "../../../../html/Embedded/PdfObject.js";
import DisplayStyle from "../../../../html/Style/Display.js";
import FlexDirection from "../../../../html/Style/Flex/FlexDirection.js";
import CodeContainer from "../../../../html/Formatting/CodeContainer.js";
import RowFlexLayout from "../../../../framework/Com/Layout/RowFlexLayout.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";


export default class DocumentView extends ContentView {

    onData(data) {

        this.heightPercent = 100;
        this.display = DisplayStyle.FLEX;
        this.flexDirection = FlexDirection.COLUMN;

        /*let table = new LabelValueAdminTable(this);
        table.addLabelValue("Filename", data.filename);
        table.addLabelValue("Filename", data.fileextension);
        table.addLabelValue("Filesize", data.filesize_text);*/

        let layout = new RowFlexLayout(this);

        let download = new DownloadMenuIcon(layout);
        download.showLabel = false;
        download.downloadUrl = data.url;
        download.render();

        let p = new ParagraphContainer(layout);
        p.text = data.filesize_text;


        /*
        let text = new AdminLargeTextBox(this);
        text.label="Text";
        text.value= data.text;
        text.render();*/

        if (data.fileextension === "txt") {

            let code = new CodeContainer(this);
            code.text = data.text;

        }


        if (data.fileextension === "pdf") {
            let object = new PdfObjectContainer(this);
            object.data = data.url;
            object.widthPercent = 100;
            object.heightPercent = 100;
            object.render();
        }

    }

}
