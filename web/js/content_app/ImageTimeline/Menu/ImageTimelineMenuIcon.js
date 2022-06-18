import MenuIcon from "../../../framework/Menu/MenuIcon.js";
import GlobalWidgetContainer from "../../../framework/Widget/GlobalWidgetContainer.js";
import ImageTimelineWidget from "../Widget/ImageTimelineWidget.js";

export default class ImageTimelineMenuIcon extends MenuIcon {

    constructor(parentContainer = null) {

        super(parentContainer);

        this.title = "Image Timeline";
        this.icon = "image";

        let local = this;

        this.onClick = function () {

            local._callMenuClick();

            GlobalWidgetContainer.clearWidget();
            GlobalWidgetContainer.addWidget(new ImageTimelineWidget());

        }

    }

}