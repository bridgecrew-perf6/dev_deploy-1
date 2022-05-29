import MenuIcon from "../../framework/Menu/MenuIcon.js";
import GlobalWidgetContainer from "../../framework/Widget/GlobalWidgetContainer.js";
import AllgemeineLageWidget from "./AllgemeineLageWidget.js";

export default class _AllgemeineLageMenuIcon extends MenuIcon {

    constructor(parentContainer = null) {

        super(parentContainer);

        this.title = "Allgemeine Lage";
        this.icon = "sun";

        let local = this;

        this.onClick = function () {

            GlobalWidgetContainer.clearWidget();

            local._callMenuClick();

            let widget = new AllgemeineLageWidget();
            GlobalWidgetContainer.addWidget(widget);

        }

    }

}