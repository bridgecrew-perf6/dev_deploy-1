import PageContainer from "../../../framework/Page/PageContainer.js";
import WebcamImageScroll from "../Com/Scroll/WebcamImageScroll.js";

export default class WebcamPage extends PageContainer {


    constructor(parentContainer) {

        super(parentContainer);
        this.pageTitle="Webcam";
        //this.pageIcon="cloud";

    }


    render() {

        let scroll = new WebcamImageScroll(this);
        scroll.paginationLimit = 5;  // 50;
        scroll.heightPercent=100;
        scroll.render();

    }


}





