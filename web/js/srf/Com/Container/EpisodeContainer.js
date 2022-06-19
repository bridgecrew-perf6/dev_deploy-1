import DivContainer from "../../../html/Content/Div.js";
import EpisodeService from "../../Service/EpisodeService.js";
import H1Container from "../../../html/Title/H1.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import HrContainer from "../../../html/Layout/HrContainer.js";
import AdminButton from "../../../framework/AdminButton.js";
import DialogContainer from "../../../html/Dialog/Dialog.js";
import SrfPlayer from "../Player/SrfPlayer.js";
import AdminDialog from "../../../framework/Admin/Dialog/AdminDialog.js";

export default class EpisodeContainer extends DivContainer {


    render() {

        let local = this;

        let service = new EpisodeService();
        service.onDataRow = function (dataRow) {

            let title = new H1Container(local);
            title.text = dataRow.title;


            let p = new ParagraphContainer(local);
            p.text = dataRow.description;

            let btn=new AdminButton(local);
            btn.label="Show";
            btn.onClick=function () {

                let dialog= new AdminDialog(local);  // new DialogContainer(local);
                dialog.dialogTitle=  dataRow.title;

                let player=new SrfPlayer(dialog);
                player.urn = dataRow.urn;

                dialog.showDialog();


            };

            new HrContainer(local);

        };
        service.sendRequest();


    }


}