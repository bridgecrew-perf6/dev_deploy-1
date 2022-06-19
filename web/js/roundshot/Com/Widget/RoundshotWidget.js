import RoundshotListBox from "../../Com/ListBox/RoundshotListBox.js";
import DivContainer from "../../../html/Content/Div.js";
import SmallContainer from "../../../html/Formatting/SmallContainer.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import HyperlinkContainer from "../../../html/Hyperlink/Hyperlink.js";
import AdminImage from "../../../framework/Image/AdminImage.js";
import DisplayStyle from "../../../html/Style/Display.js";
import ViewWidgetContainer from "../../../framework/Com/Widget/ViewWidget.js";
import RoundshotContainer from "../Container/RoundshotContainer.js";

export default class RoundshotWidget extends ViewWidgetContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "Roundshot";
        this.widgetIcon = "camera";

    }


    render() {

        let container=new RoundshotContainer(this);
        container.render();



        /*
        let div = new DivContainer(this);

        let roundshot = new RoundshotListBox(div);
        roundshot.onChange = function () {

            let service = new ServiceRequest("roundshot-item");
            service.addParameter("id", roundshot.value);
            service.sendRequest();
            service.onRow = function (row) {

                image.src = row.url + "cams/" + row.roundshot_number + "/thumbnail";
                image.imageLarge = row.url + "cams/" + row.roundshot_number + "/thumbnail";
                image.render();

                hyperlink.text = row.url;
                hyperlink.href = row.url;

            };

        };

        let image = new AdminImage(div);
        image.display = DisplayStyle.BLOCK;

        let hyperlink = new HyperlinkContainer(div);
        hyperlink.openNewTab = true;
        hyperlink.display = DisplayStyle.BLOCK;

        let small = new SmallContainer(div);
        small.text = "Source Roundshot";
        small.display = DisplayStyle.BLOCK;*/

    }

}