import ViewWidgetContainer from "../../../framework/Com/Widget/ViewWidget.js";
import RadioLivestreamListBox from "../ListBox/RadioLivestreamListBox.js";
import H3Container from "../../../html/Title/H3.js";
import SrfRadioLivestreamView from "../../Content/Radio/SrfRadioLivestreamView.js";
import DivContainer from "../../../html/Content/Div.js";


export default class SrfRadioWidget extends ViewWidgetContainer {

    constructor(parentContainer) {

        super(parentContainer);

        this.widgetTitle = "SRF Radio";
        this.widgetIcon = "music-player";

    }


    render() {

        let livestream = new RadioLivestreamListBox(this);
        livestream.onChange = function () {

            let json = [];
            json["id"] = livestream.value;
            json["livestream"] = livestream.getSelectedDataAttribute("livestream");
            json["urn"] = livestream.getSelectedDataAttribute("urn");

            div.emptyContainer();

            let h3 = new H3Container(div);
            //let player = new SrfPlayer(this);

            let view = new SrfRadioLivestreamView(div);
            view.fromJsonData(json);

            /*h3.text = livestream.getSelectedDataAttribute("livestream");
            player.urn = livestream.getSelectedDataAttribute("urn");*/

        };
        livestream.render();

        let div = new DivContainer(this);

    }


}