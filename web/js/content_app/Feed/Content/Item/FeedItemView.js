import ContentView from "../../../../content/ContentView.js";
import H3Container from "../../../../html/Title/H3.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";
import HyperlinkContainer from "../../../../html/Hyperlink/Hyperlink.js";

export default class FeedItemView extends ContentView {

    onData(dataRow) {

        let hyperlink = new HyperlinkContainer(this);
        hyperlink.href = dataRow.url;
        hyperlink.openNewTab = true;

        let h3 = new H3Container(hyperlink);
        h3.text= dataRow.title;

        let p=new ParagraphContainer(this);
        p.text=dataRow.description;

    }

}