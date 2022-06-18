import ServiceRequestScrollDiv from "../../../../framework/Com/Data/Scroll/ServiceRequestScrollDiv.js";
import H3Container from "../../../../html/Title/H3.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";
import SmallContainer from "../../../../html/Formatting/SmallContainer.js";
import HrContainer from "../../../../html/Layout/HrContainer.js";
import HyperlinkContainer from "../../../../html/Hyperlink/Hyperlink.js";
import BootstrapImage from "../../../../framework/Bootstrap/Image/BootstrapImage.js";
import AudioContainer from "../../../../html/Video/Audio.js";

export default class FeedItemScrollDiv extends ServiceRequestScrollDiv {


    showFeed = true;


    constructor(parentContainer) {

        super(parentContainer);
        this.service = "feed-item-list";

    }


    onDataRow(dataRow) {

        if (this.showFeed) {
            let feed = new SmallContainer(this);
            feed.text = dataRow.feed_title;
        }

        let hyperlink = new HyperlinkContainer(this);
        //hyperlink.text = dataRow.url;
        hyperlink.href = dataRow.url;
        hyperlink.openNewTab = true;

        let h3 = new H3Container(hyperlink);
        h3.text = dataRow.title;

        if (dataRow.has_image) {
            let img = new BootstrapImage(this);
            img.src = dataRow.image_url;
        }


        let p = new ParagraphContainer(this);
        p.text = dataRow.description;

        let small = new SmallContainer(this);
        small.text = dataRow.date_time;

        if (dataRow.has_audio) {
            let audio = new AudioContainer(this);
            audio.audioUrl = dataRow.audio_url;
        }


        new HrContainer(this);

    }


    set feedId(value) {

        this.addParameter("feed", value);

    }

}