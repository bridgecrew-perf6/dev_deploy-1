import ContentView from "../../../content/ContentView.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";

export default class NoteContentView extends ContentView {


    onData(data) {
        //super.onData(data);

        let p=new ParagraphContainer(this);
        p.text=data.text;


        //str = str.replace(/(?:\r\n|\r|\n)/g, '<br>');


    }

}

