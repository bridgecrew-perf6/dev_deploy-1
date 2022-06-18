import ViewWidgetContainer from "../../../../framework/Com/Widget/ViewWidget.js";
import ImageSearchService from "../../Service/ImageSearchService.js";
import ImageContainer from "../../../../html/Image/Image.js";
import RowFlexLayout from "../../../../framework/Com/Layout/RowFlexLayout.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";
import Debug from "../../../../core/Debug/Debug.js";

export default class ImageSearchWidget extends ViewWidgetContainer {


    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle="Image Search";
        this.widgetIcon="image";


    }


    render() {

        let container = new RowFlexLayout(this);
        container.flexWrap=true;

        let service= new ImageSearchService();
        service.onDataRow=function (dataRow) {

            let img = new ImageContainer(container);
            img.src = dataRow.image_url;


        };
        service.sendRequest();







    }


}