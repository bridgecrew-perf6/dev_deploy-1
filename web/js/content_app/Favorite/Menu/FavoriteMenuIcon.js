import MenuIcon from "../../../framework/Menu/MenuIcon.js";
import GlobalWidgetContainer from "../../../framework/Widget/GlobalWidgetContainer.js";
import FavoriteWidget from "../Widget/FavoriteWidget.js";

export default class FavoriteMenuIcon extends MenuIcon {

    constructor(parentContainer = null) {

        super(parentContainer);


        this.label= "Lesezeichen";
        this.icon = "bookmark";

        this.active=false;

        let local = this;

        this.onClick = function () {

            let widget = new FavoriteWidget();
            GlobalWidgetContainer.addWidget(widget);

        }

    }

}