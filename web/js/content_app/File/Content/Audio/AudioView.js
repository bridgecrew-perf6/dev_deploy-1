import AudioContainer from "../../../../html/Video/Audio.js";
import ContentView from "../../../../content/ContentView.js";
import Debug from "../../../../core/Debug/Debug.js";

export default class AudioView extends ContentView {

    onData(dataRow) {

        //(new Debug()).write(dataRow);

        let player = new AudioContainer(this);
        player.audioUrl = dataRow.url;

    }

}