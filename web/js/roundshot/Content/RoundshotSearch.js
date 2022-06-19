import DivContainer from "../../html/Content/Div.js";
import RoundshotSearchService from "../Service/RoundshotSearchService.js";
import DisplayStyle from "../../html/Style/Display.js";
import HyperlinkContainer from "../../html/Hyperlink/Hyperlink.js";
import ScrollDiv from "../../framework/Com/Scroll/Scroll.js";
import HrContainer from "../../html/Layout/HrContainer.js";
import BootstrapImage from "../../framework/Bootstrap/Image/BootstrapImage.js";
import H5Container from "../../html/Title/H5.js";
import ContentSearch from "../../content/Base/ContentSearch.js";
import Debug from "../../core/Debug/Debug.js";
import DocumentContainer from "../../html/Document/Document.js";
import ServiceRequestScrollDiv from "../../framework/Com/Data/Scroll/ServiceRequestScrollDiv.js";

export default class RoundshotSearch extends ContentSearch {

    render() {

        let local=this;

        let scroll = new ServiceRequestScrollDiv(this);  // new DivContainer(this);  // new ScrollDiv(this);
        scroll.paginationLimit=100;
scroll.service= "roundshot-search";

        /*let service = new RoundshotSearchService();
        service.paginationLimit=20;*/
        scroll.onDataRow = function (dataRow) {

            /*let hyperlink = new HyperlinkContainer(scroll);
            hyperlink.onClick=function () {
                local.onContentClick(dataRow.content_id);
                return false;
            };*/

            let h5 = new H5Container(scroll);
            h5.text = dataRow.roundshot;
            h5.onClick=function () {
                local.onContentClick(dataRow.content_id);
                return false;
            };

            let img = new BootstrapImage(scroll);
            img.src = dataRow.image_url;

            let external = new HyperlinkContainer(scroll);
            external.display = DisplayStyle.BLOCK;
            external.openNewTab = true;
            external.text = dataRow.url;
            external.href = dataRow.url;

            (new HrContainer(scroll));

        };
        //service.sendRequest();
        scroll.render();


        this.onEndScroll=function () {
            (new Debug()).write("end scroll");
        };

        let document=new DocumentContainer();
        document.onEndScroll = function () {
            (new Debug()).write("document end scroll");
            scroll.loadMoreData();
            //service.
        };


    }

}