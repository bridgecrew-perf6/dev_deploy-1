import ContentView from "../../content/ContentView.js";
import HyperlinkContainer from "../../html/Hyperlink/Hyperlink.js";
import ParagraphContainer from "../../html/Content/Paragraph.js";
import DisplayStyle from "../../html/Style/Display.js";
import BootstrapImage from "../../framework/Bootstrap/Image/BootstrapImage.js";


export default class UrlView extends ContentView {

    onData(data) {

        let hyperlink = new HyperlinkContainer(this);
        hyperlink.openNewTab = true;
        hyperlink.display = DisplayStyle.BLOCK;
        hyperlink.text = data.title;
        hyperlink.href = data.url;

        if (data.has_image) {

            let img = new BootstrapImage(this);
            img.src=data.image_url;


        }

        let p = new ParagraphContainer(this);
        p.text = data.description;




    }

}