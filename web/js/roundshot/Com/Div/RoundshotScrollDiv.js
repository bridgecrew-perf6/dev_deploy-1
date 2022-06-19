import ServiceRequestScrollDiv from "../../../framework/Scroll/ServiceRequestScrollDiv.js";
import H2Container from "../../../html/Title/H2.js";
import HrContainer from "../../../html/Layout/HrContainer.js";
import AdminImage from "../../../framework/Image/AdminImage.js";
import DisplayStyle from "../../../html/Style/Display.js";
import HyperlinkContainer from "../../../html/Hyperlink/Hyperlink.js";
import DownloadMenuIcon from "../../../framework/Com/Menu/Icon/DownloadMenuIcon.js";
import FullscreenMenuIcon from "../../../framework/Com/Menu/Icon/FullscreenMenuIcon.js";
import DivContainer from "../../../html/Content/Div.js";

export default class RoundshotScrollDiv extends ServiceRequestScrollDiv {

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "roundshot-list";

    }


    onDataRow(dataRow) {


        let container = new DivContainer(this);

        let h2 = new H2Container(container);
        h2.text = dataRow.roundshot;

        let img = new AdminImage(container);
        img.display = DisplayStyle.BLOCK;
        img.src = dataRow.image_url;
        img.imageLarge = dataRow.image_url;
        img.label = dataRow.subject;

        let hyperlink = new HyperlinkContainer(container);
        hyperlink.display=DisplayStyle.BLOCK;
        hyperlink.openNewTab=true;
        hyperlink.text = dataRow.url;
        hyperlink.href = dataRow.url;

        let download = new DownloadMenuIcon(container);
        download.downloadUrl =  dataRow.image_url;

        let fullscreen=new FullscreenMenuIcon(container);
        fullscreen.attachTo=container;


        new HrContainer(this);

    }


    set query(value) {

        this.addParameter("q", value);

    }

}