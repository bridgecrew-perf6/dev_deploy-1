import ContentView from "../../../../content/ContentView.js";
import BootstrapImage from "../../../../framework/Bootstrap/Image/BootstrapImage.js";

export default class BisendiagrammView extends ContentView {

    onData(dataRow) {

        let img=new BootstrapImage(this);
        img.src=dataRow.image_url;

    }

}