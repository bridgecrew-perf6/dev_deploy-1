import RadioLivestreamListBox from "../ListBox/RadioLivestreamListBox.js";
import H3Container from "../../../html/Title/H3.js";
import SrfRadioLivestreamView from "../../Content/Radio/SrfRadioLivestreamView.js";
import DivContainer from "../../../html/Content/Div.js";
import AdminCard from "../../../framework/Admin/Card/AdminCard.js";
import AdminLoader from "../../../framework/Admin/Loader/AdminLoader.js";
import LivestreamContainer from "../Container/LivestreamContainer.js";


export default class SrfLivestreamCard extends AdminCard {

    render() {

        this.cardTitle = "SRF Radio";

        let container=new LivestreamContainer(this);
        container.render();


        /*
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

        /*
        };
        livestream.render();

        let div = new DivContainer(this);*/

    }


}