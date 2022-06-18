import ContentView from "../../../../content/ContentView.js";
import DownloadMenuIcon from "../../../../framework/Com/Menu/Icon/DownloadMenuIcon.js";
import AdminImage from "../../../../framework/Admin/Image/AdminImage.js";


export default class ImageView extends ContentView {

    onData(data) {

        let imageUrl = data.image_url_orginal;

        let download = new DownloadMenuIcon(this);
        download.downloadUrl = imageUrl;

        /*
        let seadragon = new SeadragonImage(this);
        seadragon.widthPercent=100;
        seadragon.fromImageUrl(data.image_url_large);*/


        let img = new AdminImage(this);  // new BootstrapImage(this);  // new AdminImage(this);
        //img.widthPercent = 100;
        img.src = data.image_url;
        /*img.imageLarge = data.image_url_large;
        img.label = data.filename;*/
        img.render();

    }

}
