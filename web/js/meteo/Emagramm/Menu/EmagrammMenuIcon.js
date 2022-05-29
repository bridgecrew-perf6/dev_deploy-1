import MenuIcon from "../../../framework/Menu/MenuIcon.js";
import RoundshotWidget from "../../../roundshot/Widget/RoundshotWidget.js";
import GlobalWidgetContainer from "../../../framework/Widget/GlobalWidgetContainer.js";
import EmagrammWidget from "../Widget/EmagrammWidget.js";

export default class EmagrammMenuIcon extends MenuIcon {

    constructor(parentContainer = null) {

        super(parentContainer);

        this.title = "Emagramm";
        this.icon = "cloud";

        let local = this;

        this.onClick = function () {

            local._callMenuClick();

            GlobalWidgetContainer.clearWidget();

            let widget = new EmagrammWidget();
            //widget.widthPixel=1200;
            //widget.heightPixel = 600;
            widget.widthPercent = 100;

            GlobalWidgetContainer.addWidget(widget);

        }

    }


}