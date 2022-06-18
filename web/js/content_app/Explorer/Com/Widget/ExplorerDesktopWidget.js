import WidgetContainer from "../../../../framework/Com/Widget/Widget.js";
import ContentTypeCollection from "../../../../content/Type/ContentTypeCollection.js";
import ContainerType from "../../Content/Container/ContainerType.js";
import NewMenuIcon from "../../../../framework/Com/Menu/Icon/NewMenuIcon.js";
import AdminModal from "../../../../framework/Com/Modal/AdminModal.js";
import ContainerForm from "../../Content/Container/ContainerForm.js";
import LiContainer from "../../../../html/Listing/LiContainer.js";
import UnorderedList from "../../../../html/Listing/UnorderedList.js";
import ListStyleType from "../../../../html/Style/Listing/ListStyleType.js";
import ServiceRequest from "../../../../framework/Service/ServiceRequest.js";
import CursorStyle from "../../../../html/Style/Cursor.js";
import ColorStyle from "../../../../html/Style/Color.js";
import Debug from "../../../../core/Debug/Debug.js";
import ContainerView from "../../Content/Container/ContainerView.js";
import ListServiceRequest from "../../../../framework/Service/ListServiceRequest.js";
import ViewWidgetContainer from "../../../../framework/Com/Widget/ViewWidget.js";
import ContentBuilder from "../../../../content/Builder/ContentBuilder.js";
import RowFlexLayout from "../../../../framework/Com/Layout/RowFlexLayout.js";
import ColumnFlexLayout from "../../../../framework/Com/Layout/ColumnFlexLayout.js";

export default class ExplorerDesktopWidget extends ViewWidgetContainer {


    ITEM_VIEW = 10;

    constructor(parentContainer) {

        super(parentContainer);

        this.widgetTitle = "Explorer";
        this.widgetIcon = "folder";

    }


    render() {

        let local=this;

        this.addHomeView();
        this.addHomeTitle("Explorer");
        this.addView(this.ITEM_VIEW);

        let homeView = this.showHomeView();

        (new ContentTypeCollection())
            .addContentType(ContainerType);


        /*
            .addContentType(NoteContentType);
*/

        /*
        let navigation = new AdminNavigation(this);
        navigation.addMenu("Menu 1");
        navigation.addMenu("Menu 2", function () {
            (new Debug()).write("menu2");
        });
        navigation.addMenu("Menu 3");*/


        let newBtn = new NewMenuIcon(homeView);
        newBtn.label="New Container";
        newBtn.onClick = function () {

            let modal = new AdminModal();
            modal.modalTitle = "New Container";

            let form = new ContainerForm();
            form.onSubmit = function () {
                modal.close();

                let li = new LiContainer(list);
                li.text = form._container.value;

                //sorting

            };
            form.render();

            modal.show(form);

        };


        let row = new RowFlexLayout(homeView);
        let col1 = new ColumnFlexLayout(row);
        //let table = new AdminTable(col1);

        let list = new UnorderedList(col1);
        list.listStyle=ListStyleType.NONE;

        let service = new ListServiceRequest("container-list");
        service.onDataRow = function (dataRow) {

            //list.addItem(row.container);

            let li = new LiContainer(list);
            li.text = dataRow.container;
            li.cursor = CursorStyle.POINTER;
            li.paddingPixel=20;
            li.backgroundColor= ColorStyle.LIGHT_GREY;
            li.onClick = function () {

                (new Debug()).write(dataRow.id);

                col2.emptyContainer();

                let view = new ContainerView(col2);
                view.fromDataId((new ContainerType()).id, dataRow.id);

                view.onItemClick = function (itemDataRow) {

                    let itemView = local.showView(local.ITEM_VIEW);
                    local.setPreviousViewStatus(local.HOME_VIEW);

                    itemView.emptyContainer();

                    let builder = new ContentBuilder();
                    builder.onView = function (contentView) {
                      itemView.addContainer(contentView);
                    };
                    builder.getContent(itemDataRow.content_id);


                };


                view.render();

                /*let builder = new ContentBuilder();
                let type = builder.getContent(row.content_id);
                builder.onContentType=function (contentType) {

                    (new Debug()).write(contentType);

                    let div = new DivContainer();
                    div.text = "Subject: "+ row.subject;

                    let form = new contentType.form(div);   //form new ContainerForm(div);
                    //form._container.value = row.subject;
                    form.onEdit(row.data_id);

                    let modal = new AdminModal();
                    modal.modalTitle="Edit";
                    modal.show(div);

                };*/

            };


            /*
            let tableRow = new TableRow(table);
            tableRow.addText(row.subject);*/


            /*tableRow.addText(row.content_id);
            tableRow.addText(row.data_id);
            tableRow.onClick = function () {

                (new Debug()).write("content type id: "+row.content_type_id);
                (new Debug()).write("content id: "+row.content_id);


                let builder = new ContentBuilder();
                let type = builder.getContent(row.content_id);
                builder.onContentType=function (contentType) {

                    (new Debug()).write(contentType);

                    let div = new DivContainer();
                    div.text = "Subject: "+ row.subject;

                    let form = new contentType.form(div);   //form new ContainerForm(div);
                    //form._container.value = row.subject;
                    form.onEdit(row.data_id);

                    let modal = new AdminModal();
                    modal.modalTitle="Edit";
                    modal.show(div);

                };

            };*/

        }

        service.sendRequest();


        let col2 = new AdminColumn(row);
        let col3 = new AdminColumn(row);


        /*
        let widget = new AdminWidget(col2);
        widget.closeButton = true;
        widget.label = "New Container";

        let form = new ContainerForm();
        widget.addContainer(form);
        form.onSubmit = function () {
            widget.removeContainer();

            list.emptyContainer();

            let service = new ServiceRequest("container-list");

            service.onRow = function (row) {
                list.addItem(row.subject);
            }

            service.sendRequest();

        };

        form.render();*/


    }


}