import ContentView from "../../content/ContentView.js";
import ParagraphContainer from "../../html/Content/Paragraph.js";
import H2Container from "../../html/Title/H2.js";
import HyperlinkContainer from "../../html/Hyperlink/Hyperlink.js";
import AdminImage from "../../framework/Image/AdminImage.js";
import SmallContainer from "../../html/Formatting/SmallContainer.js";
import DisplayStyle from "../../html/Style/Display.js";

export default class RoundshotView extends ContentView {
    
    
    onData(data) {


       /* let h2 = new H2Container(this);
        h2.text = data.roundshot;


       /* let hyperlink = new HyperlinkContainer(this);
        hyperlink.openNewTab=true;
        hyperlink.text = data.url;
        hyperlink.href = data.url;*/

        //let url = data.url + "cams/" + data.roundshot_number + "/thumbnail";

        let img = new AdminImage(this);
        img.display=DisplayStyle.BLOCK;
        img.src = data.image_url;
        img.imageLarge = data.image_url;
        img.label = data.subject;         

        let hyperlink = new HyperlinkContainer(this);
        hyperlink.display=DisplayStyle.BLOCK;
        hyperlink.openNewTab=true;
        hyperlink.text = data.url;
        hyperlink.href = data.url;

       /* let p=new ParagraphContainer(this);
        p.text=data.url;*/

        let small = new SmallContainer(this);
        small.text = "Source Roundshot";
        
    }

}