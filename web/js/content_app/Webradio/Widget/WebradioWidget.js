import AdminWidget from "../../../framework/Widget/AdminWidget.js";
import AudioContainer from "../../../html/Video/Audio.js";
import WidgetContainer from "../../../framework/Com/Widget/Widget.js";

export default class WebradioWidget extends WidgetContainer {


    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "Web Radio";
        this.widgetIcon="";

    }




    render() {

        let player= new AudioContainer(this);
        player.audioUrl = "https://ais-sa2.cdnstream1.com/2447_192.mp3";


    }


}