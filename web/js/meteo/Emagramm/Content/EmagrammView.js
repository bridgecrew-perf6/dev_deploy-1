import ContentView from "../../../content/ContentView.js";
import ImageContainer from "../../../html/Image/Image.js";

export default class EmagrammView extends ContentView {

    onData(dataRow) {

        let img = new ImageContainer(this);
        img.src = dataRow.image_url;

    }

}