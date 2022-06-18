import ActionView from "../../../../content/Action/ActionView.js";
import DownloadMenuIcon from "../../../../framework/Com/Menu/Icon/DownloadMenuIcon.js";
import DeleteMenuIcon from "../../../../framework/Com/Menu/Icon/DeleteMenuIcon.js";
import ContentDeleteService from "../../../../content/Service/ContentDeleteService.js";
import EditMenuIcon from "../../../../framework/Com/Menu/Icon/EditMenuIcon.js";

// DownloadView
export default class DownloadActionView extends ActionView {


    render() {

        let local=this;

        let download = new DownloadMenuIcon(this);
        download.showLabel = false;
        download.downloadUrl = "";
        download.render();

        let edit=new EditMenuIcon(this);
        edit.render();

        let delete2 = new DeleteMenuIcon(this);
        delete2.onClick=function () {
          //alert(local.contentId);

          let deleteService=new ContentDeleteService();
          deleteService.contentId=local.contentId;
          deleteService.sendRequest();


        };
        delete2.render();

    }


}