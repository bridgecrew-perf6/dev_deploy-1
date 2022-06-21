import DocumentContainer from "../html/Document/Document.js";
import DivContainer from "../html/Content/Div.js";
import ParlamentContainer from "./Com/Container/ParlamentContainer.js";


let document = new DocumentContainer();
document.onLoaded = function () {

    let mainContent = new DivContainer();
    mainContent.fromId("main-content");

    let container = new ParlamentContainer(mainContent);
    container.render();

};






