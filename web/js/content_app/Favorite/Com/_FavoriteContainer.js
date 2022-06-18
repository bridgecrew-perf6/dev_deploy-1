import FavoriteTable from "./FavoriteTable.js";
import DivContainer from "../../../html/Content/Div.js";
import ContentSearchWidget from "../../../content/Widget/ContentSearchWidget.js";
import ContentBuilder from "../../../content/Builder/ContentBuilder.js";
import Debug from "../../../core/Debug/Debug.js";


export default class _FavoriteContainer extends DivContainer {


    _table;

    _div;

    constructor(parentContainer) {

        super(parentContainer);

        /*let btn = new AdminButton(this);
        btn.label = "Refresh";
        btn.onClick = function () {
            table.loadTable();
        };*/

        let local=this;

        this._table = new FavoriteTable(this);
        this._table.onDataRowClick = function (tableRow) {

            local._div.emptyContainer();

            let contentId = tableRow.getData("content_id");

            //(new Debug()).write()

            let builder = new ContentBuilder();
            builder.getContent(contentId);
            builder.onView = function (view) {
                local._div.addContainer(view);
            };

        };

        this._table.render();

        this._div=new DivContainer(this);


    }


    reload() {

        this._table.reloadTable();

    }


}