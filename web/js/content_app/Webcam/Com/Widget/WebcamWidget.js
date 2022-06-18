import WidgetContainer from "../../../../framework/Com/Widget/Widget.js";
import WebcamImageScroll from "../Scroll/WebcamImageScroll.js";
import Debug from "../../../../core/Debug/Debug.js";

export default class WebcamWidget extends WidgetContainer {


    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "Webcam";
        this.widgetIcon = "camera";

    }


    render() {

        this.scrollWidget = true;

        let scroll = new WebcamImageScroll(this);
        scroll.paginationLimit = 5;  // 50;
        scroll.heightPercent=100;
        scroll.render();

        this.onWidgetEndScroll = function () {
            //(new Debug()).write("end scroll");
            scroll.loadMoreData();
        };


    }


}