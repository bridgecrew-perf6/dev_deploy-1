import DocumentContainer from "../html/Document/Document.js";
import AdminMainContent from "../framework/Admin/Layout/AdminMainContent.js";
import SrfLivestreamCard from "./Com/Card/SrfLivestreamCard.js";
import LivestreamContainer from "./Com/Container/LivestreamContainer.js";
import DivContainer from "../html/Content/Div.js";
import ShowListBox from "./Com/ListBox/ShowListBox.js";
import AdminSearchTextBox from "../framework/Com/Search/AdminSearchTextBox.js";
import ShowSearchService from "./Service/ShowSearchService.js";
import AdminTitle from "../framework/Admin/Title/AdminTitle.js";
import AdminSubtitle from "../framework/Admin/Title/AdminSubtitle.js";
import Debug from "../core/Debug/Debug.js";
import AdminImage from "../framework/Admin/Image/AdminImage.js";

let document = new DocumentContainer();
document.onLoaded = function () {

    let mainContent = new AdminMainContent();


    let search = new AdminSearchTextBox(mainContent);
    search.onValueChange=function () {
        (new Debug()).write(search.value);

        container.emptyContainer();

        showService.query = search.value;
        showService.sendRequest();



    };
    search.render();


    let container = new DivContainer(mainContent);


    let showService=new ShowSearchService();
    showService.onDataRow=function (dataRow) {

        let subtitle=new AdminSubtitle(container);
        subtitle.text=dataRow.show;

        let img=new AdminImage(container);
        img.src = dataRow.image_url;
        img.widthPixel=300;



    }
    showService.sendRequest();



    /*
    let show=new ShowListBox(mainContent);
    show.render();*/


};