import ContentView from "../../content/ContentView.js";


export default class HtmlView extends ContentView {

    onData(data) {

        this.text = data.text_html;

    }

}