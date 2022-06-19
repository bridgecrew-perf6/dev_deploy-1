import MenuIcon from "../../framework/Menu/MenuIcon.js";
import GlobalWidgetContainer from "../../framework/Widget/GlobalWidgetContainer.js";
import RoundshotWidget from "../Widget/RoundshotWidget.js";

export default class RoundshotMenuIcon extends MenuIcon {


    constructor(parentContainer = null) {

        super(parentContainer);

        this.title = "Roundshot";
        this.icon = "camera";

        let local = this;

        this.onClick = function () {

            local._callMenuClick();

            GlobalWidgetContainer.clearWidget();

            let widget = new RoundshotWidget();

            GlobalWidgetContainer.addWidget(widget);

        }

    }

}