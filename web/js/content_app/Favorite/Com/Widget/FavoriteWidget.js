import FavoriteTable from "../Table/FavoriteTable.js";
import WidgetContainer from "../../../../framework/Com/Widget/WidgetContainer.js";
import FavoriteButton from "../Button/FavoriteButton.js";
import ServiceRequest from "../../../../framework/Service/ServiceRequest.js";
import ParagraphContainer from "../../../../html/Content/Paragraph.js";
import FavoriteCountService from "../../Service/FavoriteCountService.js";
import ContentWidget from "../../../../content/Com/Widget/ContentWidget.js";

export default class FavoriteWidget extends ContentWidget {   // WidgetContainer {


    /*constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "Favorite";
        this.widgetIcon="bookmark";

    }*/

    render() {


        //this._container = new _FavoriteContainer(this);

        super.render();

        let local=this;

        let homeView=this.showHomeView();

        let p = new ParagraphContainer(homeView);

        let countService = new FavoriteCountService();  // new ServiceRequest("favorite-count");
        countService.onDataRow=function (dataRow) {
            p.text = dataRow.count_text+" Items";
        };
        countService.sendRequest();


        let table = new FavoriteTable(homeView);
        table.onDataRowClick = function (dataRow) {
            local.showItem(dataRow.content_id);
        };
        //table.onViewClick=function (this) {

            /*
            let contentId = tableRow.getData("content_id");

            col2.emptyContainer();

            let widget = new AdminWidget(col2);

            let p = new ParagraphContainer(widget);
            p.text = contentId;

            let builder = new ContentBuilder();
            builder.getContent(contentId);  // getContentType(id);
            builder.onView = function (view) {
                widget.addContainer(view);
            };*/


        //};
        table.render();



    }



}