import ContentView from "../../../content/ContentView.js";
import SrfPlayer from "../../Com/Player/SrfPlayer.js";
import H3Container from "../../../html/Title/H3.js";

export default class SrfRadioLivestreamView extends ContentView {

    onData(data) {

        let h3 = new H3Container(this);
        h3.text = data.livestream;

        let player = new SrfPlayer(this);
        player.widthPercent=100;
        player.urn = data.urn;

    }

}