import ServiceRequestScrollDiv from "../../../../framework/Com/Data/Scroll/ServiceRequestScrollDiv.js";
import ContentBuilder from "../../../../content/Builder/ContentBuilder.js";
import BootstrapCard from "../../../../framework/Bootstrap/Card/BootstrapCard.js";

export default class FavoriteScroll extends ServiceRequestScrollDiv {

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "favorite-list";

    }

    onDataRow(dataRow) {

        let card = new BootstrapCard(this);

        let builder = new ContentBuilder();
        builder.getContent(dataRow.content_id);
        builder.onView = function (view) {
            card.addContainer(view);
            card.cardTitle = builder.subject;
        };

    }

}