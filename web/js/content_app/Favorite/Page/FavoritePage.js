//import AdminWidget from "../../../framework/Widget/AdminWidget.js";
import AdminWidget from "../../../framework/Com/Widget/AdminWidget.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import ContentBuilder from "../../../content/Builder/ContentBuilder.js";
import IconPageContainer from "../../../framework/Page/IconPageContainer.js";
import FavoriteTable from "../Com/Table/FavoriteTable.js";
import BootstrapRow from "../../../framework/Bootstrap/Layout/BootstrapRow.js";
import BootstrapColumn from "../../../framework/Bootstrap/Layout/BootstrapColumn.js";
import FavoriteScroll from "../Com/Scroll/FavoriteScroll.js";
import FavoriteCountService from "../Service/FavoriteCountService.js";
import FavoriteWidget from "../Com/Widget/FavoriteWidget.js";



export default class FavoritePage extends IconPageContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.pageTitle = "Favorite";
        this.pageIcon = "bookmark";

    }


    render() {

        let widget= new FavoriteWidget(this);
        widget.render();



        /*let dropdown = new _FormContentTypeCollectionDropdown(this);
        dropdown.render();*/

        /*
        let p = new ParagraphContainer(this);

        let countService = new FavoriteCountService();  // new ServiceRequest("favorite-count");
        countService.onDataRow=function (dataRow) {
            p.text = dataRow.count_text+" Items";
        };
        countService.sendRequest();



        let scroll=new FavoriteScroll(this);
        scroll.render();



        let row = new BootstrapRow(this);  // new AdminRow(this);

        let col1 = new BootstrapColumn(row);  // new AdminColumn(row);
        let col2 = new BootstrapColumn(row);  //new AdminColumn(row);

        /*
        let dropdown = new ContentTypeDropdown(col1);
        dropdown.addContentType(new TextContentType());
        dropdown.addContentType(new UrlContentType());
        //dropdown.addContentType(new ImageContentType());


        let viewDiv = new DivContainer(col2);


        let btn = new AdminButton(col1);
        btn.label = "Refresh";
        btn.onClick = function () {
            table.loadTable();
        };*/

/*
        let table = new FavoriteTable(col1);
        table.onViewClick=function (dataRow) {

            let contentId = dataRow.content_id;

            col2.emptyContainer();

            let widget = new AdminWidget(col2);

            /*let p = new ParagraphContainer(widget);
            p.text = contentId;*/

        /*    let builder = new ContentBuilder();
            builder.getContent(contentId);  // getContentType(id);
            builder.onView = function (view) {
                widget.addContainer(view);
            };

        };


        /*
        table.onItemClick = function (id) {

            let widget = new AdminWidget(col2);

            let p = new ParagraphContainer(widget);
            p.text = id;

            let builder = new ContentBuilder();
            builder.getContentType(id);
            builder.onView = function (view) {
                widget.addContainer(view);
            };


            //let content = new Conten new ContentViewContainer();
            //content.fro

            //let view = new (new ContentTypeCollection()).getContentType(item.content_type_id).view;

            /* let title = new H2Container( contentDiv);
             title.text=item.titel;*/

            //view.fromContentId(item.content_id);
            //view.fromDataId(item.data_id);

            //(new Debug()).write(view);

            //contentDiv.addContainer(view);


        //};

        //table.render();


        //let container = new FavoriteContainer(this);
        //container.onite


        //container.render();

        /*let btn=new AdminButton(this);
        btn.label="Refresh";
        btn.onClick=function () {
          table.loadTable();
        };

        let table = new FavoriteTable(this);
        table.render();*/


    }


}

