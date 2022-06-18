import IconPageContainer from "../../../framework/Page/IconPageContainer.js";
import ImageTimelineContainer from "../Com/Container/ImageTimelineContainer.js";

export default class ImageTimelinePage extends IconPageContainer {

    constructor(parentContainer) {

        super(parentContainer);

        this.pageTitle = "Image Timeline";
        this.pageIcon = "image";

    }


    render() {

        let container = new ImageTimelineContainer(this);
        container.render();

    }

}