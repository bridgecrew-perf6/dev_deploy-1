import MenuIcon from "../../framework/Menu/MenuIcon.js";
import FavoriteWidget from "../../content_app/Favorite/Widget/FavoriteWidget.js";
import GlobalWidgetContainer from "../../framework/Widget/GlobalWidgetContainer.js";
import SrfPage from "../Page/SrfPage.js";
import BodyContainer from "../../html/Document/Body.js";
import RoundshotWidget from "../../roundshot/Widget/RoundshotWidget.js";
import SrfWidget from "../Widget/SrfWidget.js";

export default class SrfMenuIcon extends MenuIcon {

    constructor(parentContainer = null) {

        super(parentContainer);

        this.title = "SRF";
        this.icon = "tv";

        this.onClick = function () {

            GlobalWidgetContainer.clearWidget();

            let widget = new SrfWidget();
            widget.heightPercent=80;
            GlobalWidgetContainer.addWidget(widget);


            /*let widget = new FavoriteWidget();
            GlobalWidgetContainer.addWidget(widget);*/

            /*let body = new BodyContainer();
            body.emptyContainer();

            let page =new SrfPage(body);
            page.render();*/


        }

    }


}
