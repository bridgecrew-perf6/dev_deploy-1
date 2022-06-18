import ContentView from "../../../../content/ContentView.js";
import VideoContainer from "../../../../html/Video/Video.js";

export default class VideoView extends ContentView {

    onData(dataRow) {

        /*this.maxHeightPercent = 100;
        this.maxWidthPercent=100;*/
        //this.heightPercent=100

        let video = new VideoContainer(this);
        video.videoUrl = dataRow.url;
        video.widthPercent=100;
        //video.maxWidthPercent = 100;
        //video.heightPercent=100;

    }

}