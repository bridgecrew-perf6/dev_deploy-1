import ContentView from "../../../../content/ContentView.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";
import H1Container from "../../../../html/Title/H1.js";
import TreeFileUploadContainer from "../../../../content/Index/Tree/Upload/TreeFileUploadContainer.js";
import TreeTable from "../../../../content/Index/Tree/Com/Table/TreeTable.js";

export default class ContainerView extends ContentView {


    onItemClick=null;

    onData(dataRow) {

        //(new Debug()).write(dataRow);

        let local= this;

        let title = new H1Container(this);
        title.text = dataRow.container;

        let p = new ParagraphContainer(this);
        p.text = dataRow.description;

        /*let p2 = new ParagraphContainer(this);
        p2.text = "id:" + dataRow.id;

        let p3 = new ParagraphContainer(this);
        p3.text = "id:" + dataRow.content_id;*/

        /*
        let view = new TreeActionView(this);
        view.contentId = dataRow.content_id;
        view.render();*/



        /*
        let upload = new TreeFileUploadContainer(this);
        upload.parentId = dataRow.content_id;
        upload.onUploadFinished = function () {
          table.reloadData();
        };
        upload.render();

        let table=new TreeTable(this);
        table.parentId= dataRow.content_id;

        if (this.onItemClick!==null) {
            table.onDataRowClick = function (dataRow) {
                local.onItemClick(dataRow);
            };
        }

        table.render();*/

    }


    /* onData(data) {

         //(new Debug()).write(data);

         /*let p1=new ParagraphContainer(this);
         p1.text = "bla bla bla";*/

    /*   let p=new ParagraphContainer(this);
       p.text = "container:"+ data.container;
       //p.text = "container:";  // + data.container;

   }*/

}
