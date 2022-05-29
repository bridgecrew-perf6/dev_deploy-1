import ContentView from "../../../../content/ContentView.js";
import BootstrapImage from "../../../../framework/Bootstrap/Image/BootstrapImage.js";
import Debug from "../../../../core/Debug/Debug.js";

export default class FoehndiagrammView extends ContentView {

    onData(dataRow) {

        (new Debug()).write(dataRow);

        let img=new BootstrapImage(this);
        img.src=dataRow.image_url;

    }

}