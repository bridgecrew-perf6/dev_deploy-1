import BootstrapDataListGroup from "../../../../framework/Bootstrap/ListGroup/BootstrapDataListGroup.js";

export default class FeedListGroup extends BootstrapDataListGroup {

    onFeedClick = null;

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "feed-list";

    }


    onDataRow(dataRow) {

        let local = this;

        this.addHyperlink(dataRow.feed, function () {
            if (local.onFeedClick !== null) {
                local.onFeedClick(dataRow.id);
            }
        });


    }

}