import DivContainer from "../../../html/Content/Div.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import FraktionService from "../../Service/FraktionService.js";
import AdminTable from "../../../framework/Table/AdminTable.js";
import TableRow from "../../../html/Table/TableRow.js";
import AbstimmungService from "../../Service/AbstimmungService.js";
import H3Container from "../../../html/Title/H3.js";
import AdminButton from "../../../framework/AdminButton.js";
import GeschaeftService from "../../Service/GeschaeftService.js";
import Debug from "../../../core/Debug/Debug.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";
import H1Container from "../../../html/Title/H1.js";
import DialogContainer from "../../../html/Dialog/Dialog.js";
import AdminDialog from "../../../framework/Admin/Dialog/AdminDialog.js";

export default class ParlamentContainer extends DivContainer {

    render() {

        /*let p= new ParagraphContainer(this);
        p.text="123123123123123";*/

        let local=this;

        let abstimmung=new AbstimmungService();
        abstimmung.onDataRow=function (dataRow) {


            let h1=new H3Container(local);
            h1.text= dataRow.geschaeft;

            let btn=new AdminButton(local);
            btn.label='More';
            btn.onClick=function () {

                let geschaeft=new GeschaeftService();
                geschaeft.geschaeftId=dataRow.geschaeft_id;
                geschaeft.onDataRow=function (dataRow) {

                    //(new Debug()).write(dataRow.geschaeft);

                    //alert(dataRow.geschaeft);

                    let container = new DivContainer();

                    //let modal=new AdminModal();
                    //modal.fullPage=true;
                    //modal.show(container);

                    let dialog= new AdminDialog(local);  // new DialogContainer(local);

                    let title=new H1Container(dialog);
                    title.addCssClass("dialog-title");
                    title.text=dataRow.geschaeft;

                    let p=new ParagraphContainer(dialog);
                    p.addCssClass("dialog-content");
                    p.text = dataRow.text;

                    dialog.showDialog();


                    /*
                    let btn=new AdminButton(dialog);
                    btn.label="Close";
                    btn.onClick=function () {
                      dialog.closeDialog();
                    };*/



                };

                geschaeft.sendRequest();

            };




            let h3=new H3Container(local);
            h3.text= dataRow.abstimmung;

            let p = new ParagraphContainer(local);
            p.text=dataRow.zeit;


            let table = new AdminTable(local);

            let row = new TableRow(table);
            row.addText("Ja");
            row.addText(dataRow.ja);

            let row2 = new TableRow(table);
            row2.addText("Nein");
            row2.addText(dataRow.nein);







        };






        /*
        let table=new AdminTable(this);

        let service=new FraktionService();
        service.onDataRow = function (dataRow) {

            /*let p= new ParagraphContainer(local);
            p.text= dataRow.fraktion;*/

         /*   let tableRow=new TableRow(table);
            tableRow.addText(dataRow.fraktion);

        }*/




    }

}