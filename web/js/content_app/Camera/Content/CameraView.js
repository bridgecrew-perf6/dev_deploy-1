import AdminImage from "../../../framework/Image/AdminImage.js";
import ContentView from "../../../content/ContentView.js";

export default class CameraView extends ContentView {

    onData(data) {

        let img = new AdminImage(this);
        img.src = data.image_url;
        img.render();

    }

}