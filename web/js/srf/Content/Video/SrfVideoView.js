import ContentView from "../../../content/ContentView.js";
import SrfPlayer from "../../Com/Player/SrfPlayer.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";

export default class SrfVideoView extends ContentView {

    onData(data) {

        let player = new SrfPlayer(this);
        player.urn = data.urn;

        let p = new ParagraphContainer(this);
        p.text = data.description;

        let dateTime = new ParagraphContainer(this);
        dateTime.text = data.date_time;

    }

}