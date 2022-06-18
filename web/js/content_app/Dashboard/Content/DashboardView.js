import ContentView from "../../../content/ContentView.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import BoldContainer from "../../../html/Formatting/BoldContainer.js";

export default class DashboardView extends ContentView {

    onData(data) {
        //super.onData(data);

        let p=new ParagraphContainer(this);

        let bold = new BoldContainer(p);
        bold.text=data.container;


    }


}