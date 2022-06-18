import ContentTypeCollection from "../../../../content/Type/ContentTypeCollection.js";
import ContainerType from "../../Content/Container/ContainerType.js";
import NewMenuIcon from "../../../../framework/Com/Menu/Icon/NewMenuIcon.js";
import ContainerForm from "../../Content/Container/ContainerForm.js";
import LiContainer from "../../../../html/Listing/LiContainer.js";
import UnorderedList from "../../../../html/Listing/UnorderedList.js";
import ListStyleType from "../../../../html/Style/Listing/ListStyleType.js";
import CursorStyle from "../../../../html/Style/Cursor.js";
import ColorStyle from "../../../../html/Style/Color.js";
import ContainerView from "../../Content/Container/ContainerView.js";
import ListServiceRequest from "../../../../framework/Service/ListServiceRequest.js";
import ViewWidgetContainer from "../../../../framework/Com/Widget/ViewWidget.js";
import ContentBuilder from "../../../../content/Builder/ContentBuilder.js";
import FavoriteButton from "../../../Favorite/Com/Button/FavoriteButton.js";

export default class ExplorerMobileWidget extends ViewWidgetContainer {

    ITEM_VIEW = 10;

    NEW_CONTAINTER_VIEW = 20;

    CONTAINER_LISTING_VIEW = 30;


    constructor(parentContainer) {

        super(parentContainer);

        this.widgetTitle = "Explorer";
        this.widgetIcon = "folder";

    }


    render() {

        let local = this;

        this.addHomeView();
        this.addHomeTitle("Explorer");

        this.addView(this.ITEM_VIEW);
        this.addView(this.NEW_CONTAINTER_VIEW);
        this.addView(this.CONTAINER_LISTING_VIEW);

        this.addTitle(this.NEW_CONTAINTER_VIEW, "New Container");

        this.scrollWidget = true;

        let homeView = this.showHomeView();

        (new ContentTypeCollection())
            .addContentType(ContainerType);


        let newBtn = new NewMenuIcon(homeView);
        newBtn.label = "New Container";
        newBtn.onClick = function () {
            local.showNewContainerView();
        };

        let list = new UnorderedList(homeView);
        list.widthPercent = 100;
        list.padding = 0;
        list.margin = 0;
        list.listStyle = ListStyleType.NONE;
        list.heightPercent = 100;

        let service = new ListServiceRequest("container-list");
        service.onDataRow = function (dataRow) {

            //list.addItem(row.container);

            let li = new LiContainer(list);
            li.text = dataRow.container;
            li.cursor = CursorStyle.POINTER;
            li.paddingPixel = 20;
            li.marginPixel = 20;
            li.backgroundColor = ColorStyle.LIGHT_GREY;
            li.onClick = function () {

                //(new Debug()).write(dataRow.id);
                //col2.emptyContainer();

                local.setPreviousViewStatus(local.HOME_VIEW);

                let listingView = local.showView(local.CONTAINER_LISTING_VIEW, true);

                let view = new ContainerView(listingView);
                view.fromDataId((new ContainerType()).id, dataRow.id);

                view.onItemClick = function (itemDataRow) {

                    let itemView = local.showView(local.ITEM_VIEW, true);
                    local.setPreviousViewStatus(local.CONTAINER_LISTING_VIEW);

                    itemView.emptyContainer();

                    let favoriteBtn = new FavoriteButton(itemView);
                    favoriteBtn.contentId = itemDataRow.content_id;
                    favoriteBtn.render();

                    let builder = new ContentBuilder();
                    builder.onView = function (contentView) {
                        itemView.addContainer(contentView);
                    };
                    builder.getContent(itemDataRow.content_id);

                };

                view.render();

            };

        }

        service.sendRequest();

    }


    showNewContainerView() {

        let local = this;

        let view = this.showView(this.NEW_CONTAINTER_VIEW);

        let form = new ContainerForm(view);
        form.onSubmit = function () {
            local.showHomeView();
        };
        form.render();

    }


    showView(viewId, emptyContainer = false) {

        if (viewId === this.CONTAINER_LISTING_VIEW) {
            this.setPreviousViewStatus(this.HOME_VIEW);
        }

        return super.showView(viewId, emptyContainer);

    }


}