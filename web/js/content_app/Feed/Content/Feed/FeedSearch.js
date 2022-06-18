import ContentSearch from "../../../../content/Base/ContentSearch.js";
import FeedTable from "../../Com/Table/FeedTable.js";

export default class FeedSearch extends ContentSearch {

    render() {

        let local=this;

        let table=new FeedTable(this);
        table.onDataRowClick = function (dataRow) {
            local.onContentClick(dataRow.content_id);
        };
        table.render();

    }

}