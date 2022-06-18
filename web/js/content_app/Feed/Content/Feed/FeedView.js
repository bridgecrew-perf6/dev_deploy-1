import ContentView from "../../../../content/ContentView.js";
import DivContainer from "../../../../html/Content/Div.js";
import HyperlinkContainer from "../../../../html/Hyperlink/Hyperlink.js";
import ServiceRequest from "../../../../framework/Service/ServiceRequest.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";
import FeedItemScrollDiv from "../../Com/Scroll/FeedItemScrollDiv.js";


export default class FeedView extends ContentView {

    onData(dataRow) {

        /*let local = this;


        let p=new ParagraphContainer(this);
        p.text=dataRow.id;*/


        let feedItem = new FeedItemScrollDiv(this);
        feedItem.showFeed=false;
        feedItem.paginationLimit = 10;
        feedItem.feedId=dataRow.id;
        feedItem.render();


        /*let service = new ServiceRequest("feed-item-list");
        service.addParameter("feed", dataRow.id);
        service.onRow = function (row) {

            let div = new DivContainer(local);

            let hyperlink = new HyperlinkContainer(div);
            hyperlink.openNewTab=true;
            hyperlink.text = row.title;
            hyperlink.href = row.url;

        }
        service.sendRequest();*/


    }

}