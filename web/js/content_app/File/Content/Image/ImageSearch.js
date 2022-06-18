import ContentSearch from "../../../../content/Base/ContentSearch.js";
import ImageSearchService from "../../Service/ImageSearchService.js";
import BootstrapImage from "../../../../framework/Bootstrap/Image/BootstrapImage.js";
import DivContainer from "../../../../html/Content/Div.js";
import HyperlinkContainer from "../../../../html/Hyperlink/Hyperlink.js";

export default class ImageSearch extends ContentSearch {

    render() {

        let local = this;

        let layout=new DivContainer(this);

        let service=new ImageSearchService();
        service.onDataRow=function (dataRow) {

            let hyperlink = new HyperlinkContainer(layout);

            let img=new BootstrapImage(hyperlink);
            img.src= dataRow.image_url;
            hyperlink.onClick=function () {
                if (local.onContentClick!==null) {
                local.onContentClick(dataRow.content_id);
                }
            };

        };
        service.sendRequest();


    }


}