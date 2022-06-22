import DocumentContainer from "../html/Document/Document.js";
import AdminMainContent from "../framework/Admin/Layout/AdminMainContent.js";
import SrfLivestreamCard from "./Com/Card/SrfLivestreamCard.js";
import LivestreamContainer from "./Com/Container/LivestreamContainer.js";
import DivContainer from "../html/Content/Div.js";

let document = new DocumentContainer();
document.onLoaded = function () {

    //let mainContent = new AdminMainContent();

    let mainContent=new DivContainer();
    mainContent.fromId("srf-livestream");

    let card = new LivestreamContainer(mainContent);  // new SrfLivestreamCard(mainContent);
    card.render();

};