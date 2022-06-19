import DivContainer from "../../../html/Content/Div.js";
import RoundshotListBox from "../ListBox/RoundshotListBox.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import AdminImage from "../../../framework/Image/AdminImage.js";
import DisplayStyle from "../../../html/Style/Display.js";
import HyperlinkContainer from "../../../html/Hyperlink/Hyperlink.js";
import SmallContainer from "../../../html/Formatting/SmallContainer.js";
import BootstrapImage from "../../../framework/Bootstrap/Image/BootstrapImage.js";



// RoundshotSearchContentContainer
// RoundshotWidgetContainer

export default class RoundshotContainer extends DivContainer {


    render() {


        let div = new DivContainer(this);

        let roundshot = new RoundshotListBox(div);
        roundshot.onChange = function () {

            let service = new ServiceRequest("roundshot-item");
            service.addParameter("id", roundshot.value);
            service.sendRequest();
            service.onDataRow = function (row) {

                image.src = row.url + "cams/" + row.roundshot_number + "/thumbnail";
                image.imageLarge = row.url + "cams/" + row.roundshot_number + "/thumbnail";
                image.render();

                hyperlink.text = row.url;
                hyperlink.href = row.url;

            };

        };
        roundshot.render();

        let image = new BootstrapImage(div);  // new AdminImage(div);
        //image.display = DisplayStyle.BLOCK;

        let hyperlink = new HyperlinkContainer(div);
        hyperlink.openNewTab = true;
        hyperlink.display = DisplayStyle.BLOCK;

        let small = new SmallContainer(div);
        small.text = "Source Roundshot";
        small.display = DisplayStyle.BLOCK;



        //let div = new DivContainer(this);


        /*let roundshot = new RoundshotListBox(this);
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
        roundshot.render();

        let image = new BootstrapImage(this);  // new AdminImage(this);
        //image.display = DisplayStyle.BLOCK;

        let hyperlink = new BootstrapButtonHyperlink(this);  // new HyperlinkContainer(this);
        hyperlink.openNewTab = true;
        //hyperlink.display = DisplayStyle.BLOCK;

        let small = new SmallContainer(this);
        small.text = "Source Roundshot";*/
        //small.display = DisplayStyle.BLOCK;

    }

}