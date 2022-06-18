import ContentView from "../../../content/ContentView.js";
import AdminImage from "../../../framework/Image/AdminImage.js";
import DownloadMenuIcon from "../../../framework/Com/Menu/Icon/DownloadMenuIcon.js";
import EditMenuIcon from "../../../framework/Com/Menu/Icon/EditMenuIcon.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";


export default class ImageTimelineView extends ContentView {

    onData(data) {


        /*let imageUrl = data.image_url_orginal;

        let hyperlink = new HyperlinkContainer(this);// new AdminButton(this);
        hyperlink.href =  imageUrl;
        hyperlink.download= imageUrl.substr(imageUrl.lastIndexOf('/') + 1);

        let icon=new BootstrapIcon(hyperlink);
        icon.icon = "cloud-download";*/


        /*let download = new DownloadMenuIcon(this);
        download.downloadUrl =data.image_url;

        let edit = new EditMenuIcon(this);
        edit.onClick = function () {

          let modal = new AdminModal();


          modal.show();


        };*/



        let img = new AdminImage(this);
        img.widthPercent = 100;
        img.src = data.image_url;
        img.imageLarge = data.image_url;  // data.image_url_large;
        img.label = data.subject;  // data.filename;
        img.render();

        //let icon = new IconContainer(this);
        /*let icon = new BootstrapIcon(this);
        icon.icon = "download";
        icon.onClick= function () {

            let url =  data.image_url_orginal;
            (new UrlRedirect()).redirect(url);

        };*/


    }

}
