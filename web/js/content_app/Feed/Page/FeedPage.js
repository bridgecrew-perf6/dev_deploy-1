import PageContainer from "../../../framework/Page/PageContainer.js";
import FeedItemScrollDiv from "../Com/Scroll/FeedItemScrollDiv.js";
import BootstrapRow from "../../../framework/Bootstrap/Layout/BootstrapRow.js";
import BootstrapColumn from "../../../framework/Bootstrap/Layout/BootstrapColumn.js";
import FeedListGroup from "../Com/ListGroup/FeedListGroup.js";
import DocumentContainer from "../../../html/Document/Document.js";
import BootstrapPosition from "../../../framework/Bootstrap/Helper/BootrapPosition.js";
import FeedImportButton from "../Com/Button/FeedImportButton.js";
import BootstrapPage from "../../../framework/Bootstrap/Page/BootstrapPage.js";

export default class FeedPage extends BootstrapPage {


    constructor(parentContainer) {

        super(parentContainer);
        this.pageTitle = "Feed";  // "News";
        //this.pageIcon = "newspaper";

    }


    render() {


        /*let feed1 = new FeedListBox(this);
        feed1.defaultEmptyItem = true;
        feed1.onChange = function () {
            feedItem.feedId = feed1.value;
            feedItem.reloadData();
        }
        feed1.render();*/


        /*let layoutRow = new BootstrapRow(this);

        let col2 = new BootstrapColumn(layoutRow);
        col2.widthPixel=300;

        let col1 = new BootstrapColumn(layoutRow);*/

        //col2.addCssClass(BootstrapPosition.STICKY_TOP);

        let feedItem = new FeedItemScrollDiv(this);
        feedItem.paginationLimit = 6;
        feedItem.autoReloading=true;
        feedItem.render();

        /*let feed = new FeedListGroup(col2);
        feed.addCssClass(BootstrapPosition.STICKY_TOP);
        feed.onFeedClick = function (feedId) {
            //alert(feedId);

            window.scrollTo(0, 0);

            feedItem.feedId = feedId;  // feed1.value;
            feedItem.reloadData();
        };
        feed.render();*/

        //new FeedImportButton(col2);



        /*
        let document = new DocumentContainer();
        document.onEndScroll = function () {
            feedItem.loadMoreData();
        };*/


    }


}