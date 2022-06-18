import ContentView from "../../content/ContentView.js";
import ParagraphContainer from "../../html/Content/Paragraph.js";
import Debug from "../../core/Debug/Debug.js";
import ServiceRequest from "../../framework/Service/ServiceRequest.js";
import MouseCursor from "../../core/Mouse/MouseCursor.js";


export default class LargeTextView extends ContentView {

    onData(data) {

        this.text = data.text_html;

        /*let p = new ParagraphContainer(this);
        p.editable = true;
        p.text = data.text_html;
        p.onKeyUp = function () {

            //(new Debug()).write("on change"+p.text);

        };

        /*
        p.onFocusOut = function () {
            (new Debug()).write("focus out");

            (new MouseCursor()).setWait();

            let service = new ServiceRequest("large-text-post")
            service.addParameter("id", data.id);
            service.addParameter("text", p.text);
            service.onFinished = function () {
                (new MouseCursor()).setDefault();
            };
            service.sendRequest();


        }*/


    }


}