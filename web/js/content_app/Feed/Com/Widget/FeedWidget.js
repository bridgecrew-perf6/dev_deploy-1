import WidgetContainer from "../../../../framework/Com/Widget/Widget.js";
import FeedListBox from "../ListBox/FeedListBox.js";
import FeedItemScrollDiv from "../Scroll/FeedItemScrollDiv.js";
import Debug from "../../../../core/Debug/Debug.js";

export default class FeedWidget extends WidgetContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "News";
        this.widgetIcon = "newspaper";

    }


    render() {


        let feed = new FeedListBox(this);
        feed.defaultEmptyItem = true;
        feed.onChange = function () {
            feedItem.feedId = feed.value;
            feedItem.reloadData();
        }
        feed.render();


        let feedItem = new FeedItemScrollDiv(this);
        feedItem.paginationLimit = 10;
        feedItem.render();



        this.onWidgetEndScroll = function () {

            feedItem.loadMoreData();

            (new Debug()).write("reload");

        };


    }


}