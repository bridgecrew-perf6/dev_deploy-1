import ContentView from "../../../../content/ContentView.js";
import IframeContainer from "../../../../html/Iframe/Iframe.js";
import Debug from "../../../../core/Debug/Debug.js";
import DivContainer from "../../../../html/Content/Div.js";

export default class YouTubeView extends ContentView {

    onData(data) {

        (new Debug()).write(data);
        (new Debug()).write(data.video_id);


        let div = new DivContainer(this);
        div.addCssClass("video-container");


        //let url = 'https://www.youtube.com/embed/' . data.video_id;

        let iframe = new IframeContainer(div);
        iframe.frameborder=0;
        iframe.widthPercent=100;
        iframe.minHeightPixel=600;
        //iframe.addCssClass("nemundo-full");
        /*iframe->width = $this->width;
        iframe->height = $this->height;*/
        iframe.src = "https://www.youtube.com/embed/" + data.video_id;
        iframe.addAttribute("allow", "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture");
        iframe.addAttributeWithoutValue("allowfullscreen");

        //video_id


    }

}