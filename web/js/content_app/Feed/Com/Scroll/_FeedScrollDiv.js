
import UnorderedList from "../../../../html/Listing/UnorderedList.js";
import LiContainer from "../../../../html/Listing/LiContainer.js";

export default class _FeedScrollDiv extends ServiceRequestScrollDiv {

    _ul;

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "feed-list";

        this._ul = new UnorderedList(this);


    }


    onDataRow(dataRow) {

        //this._ul.addItem(dataRow.feed);

        let local=this;

        let li=new LiContainer(this);
        li.text= dataRow.feed;
        li.onClick=function () {
            local.onFeedClick(dataRow.id);
        }




        /*let feed = new SmallContainer(this);
        feed.text = dataRow.feed_title;

        let hyperlink = new HyperlinkContainer(this);
        //hyperlink.text = dataRow.url;
        hyperlink.href = dataRow.url;
        hyperlink.openNewTab = true;

        let h3 = new H3Container(hyperlink);
        h3.text = dataRow.title;

        let p = new ParagraphContainer(this);
        p.text = dataRow.description;

        let small = new SmallContainer(this);
        small.text = dataRow.date_time;



        new HrContainer(this);*/


    }


    onFeedClick(feedId) {



    }



}