import BootstrapPage from "../../../framework/Bootstrap/Page/BootstrapPage.js";
import SearchAutocomplete from "../../../content/Index/Search/Com/Autocomplete/SearchAutocomplete.js";
import BootstrapTab from "../../../framework/Bootstrap/Tab/BootstrapTab.js";
import DivContainer from "../../../html/Content/Div.js";
import BootstrapRow from "../../../framework/Bootstrap/Layout/BootstrapRow.js";
import ContentTypeDataDropdown from "../../../content/Com/Dropdown/ContentTypeDataDropdown.js";
import ContentBuilder from "../../../content/Builder/ContentBuilder.js";
import BackMenuIcon from "../../../framework/Com/Menu/Icon/ArrowLeftMenuIcon.js";
import BootstrapCard from "../../../framework/Bootstrap/Card/BootstrapCard.js";
import DocumentContainer from "../../../html/Document/Document.js";
import ActionContainer from "../../../content/Com/Container/ActionContainer.js";
import MouseCursor from "../../../core/Mouse/MouseCursor.js";
import GeoIndexWidget from "../../../content/Index/Geo/Com/Widget/GeoIndexWidget.js";
import ContentTypeWidget from "../../../content/Com/Widget/ContentTypeWidget.js";
import UrlFileForm from "../../File/Com/Form/UrlFileForm.js";
import SearchResultWidget from "../../../content/Index/Search/Com/Widget/SearchResultWidget.js";
import MenuIcon from "../../../framework/Menu/MenuIcon.js";
import ContentFileUploadForm from "../../File/Com/Form/ContentFileUploadForm.js";


export default class ExplorerPage extends BootstrapPage {

    constructor(parentContainer) {

        super(parentContainer);

        this.pageTitle = "Explorer";
        this.pageIcon = "folder";

    }


    render() {


        let layoutRow = new BootstrapRow(this);

        /*let dropdown = new AddContentMenuIcon(this);
        dropdown.addCssClass("col");
        dropdown.onContentType = function (contentType) {
            local.showNew(contentType);
        };
        dropdown.render();

        let container= new FileUploadContainer(this);
        container.addCssClass("col");
        container.serviceName= "file-upload";
        container.render();*/


        let dropdown = new ContentTypeDataDropdown(layoutRow);
        dropdown.addCssClass("col");
        dropdown.onContentForm = function (form) {

            form.onSubmit = function (dataRow) {
                formContainer.emptyContainer();

                //alert(dataRow.content_id);

                let builder = new ContentBuilder();
                builder.getContent(dataRow.content_id);
                builder.onView = function (contentView) {

                    searchDiv.emptyContainer();
                    searchDiv.addContainer(contentView);

                };


            };

            formContainer.emptyContainer();
            formContainer.addContainer(form);

        };
        dropdown.render();


        let upload = new ContentFileUploadForm(layoutRow);
        upload.addCssClass("col");
        upload.onFinished = function () {

        };
        upload.render();
        /*let container = new UploadToggleButton(layoutRow);
        container.render();*/


        let icon = new MenuIcon(layoutRow);
        icon.addCssClass("col");
        icon.icon = "window";
        icon.onClick = function () {

            let form = new UrlFileForm(layoutRow);
            form.onSubmit = function () {
                form.removeContainer();
            };
            form.render();

        };
        icon.render();


        let formContainer = new DivContainer(this);


        let search = new SearchAutocomplete(this);
        search.onWordChange = function () {

            searchDiv.emptyContainer();

            let searchResult = new SearchResultWidget(searchDiv);
            searchResult.query = search.value;
            searchResult.render();

        };
        search.render();

        let tab = new BootstrapTab(this);

        let searchDiv = new DivContainer(this);


        tab.addTab("Search", function () {
            searchDiv.emptyContainer();

            let widget = new ContentTypeWidget(searchDiv);
            widget.render();

        });


        tab.addTab("Type", function () {

            searchDiv.emptyContainer();

            let widget = new ContentTypeWidget(searchDiv);
            widget.render();

        }, true);


        tab.addTab("Geo", function () {

            searchDiv.emptyContainer();

            let container = new GeoIndexWidget(searchDiv);
            container.render();

        }).addTab("Image", function () {

                searchDiv.emptyContainer();

            }
        ).addTab("Timeline", function () {
            searchDiv.emptyContainer();
        });



    }



    /*
    showItem(contentId) {

        let itemView = this;

        let local = this;

        let backIcon = new BackMenuIcon(itemView);
        backIcon.label = "Back";
        backIcon.showLabel = true;
        backIcon.onClick = function () {
            local.showHomeView();
        };
        backIcon.render();


        let card = new BootstrapCard(itemView);

        let builder = new ContentBuilder();
        builder.getContent(contentId);
        builder.onView = function (view) {

            (new DocumentContainer()).title = builder.subject;

            card.addContainer(view);
            card.cardTitle = builder.subject;

            let actionView = new ActionContainer(card);
            actionView.contentId = contentId;
            actionView.render();

            (new MouseCursor()).setDefault();

        }

    }*/


}