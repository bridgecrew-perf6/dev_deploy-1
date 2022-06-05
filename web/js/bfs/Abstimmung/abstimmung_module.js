import DocumentContainer from "../../html/Document/Document.js";
import DivContainer from "../../html/Content/Div.js";
import Debug from "../../core/Debug/Debug.js";
import AbstimmungContainer from "./Com/Container/AbstimmungContainer.js";


let document = new DocumentContainer();
document.onLoaded = function () {

    (new Debug()).write("document loaded");

    let mainContent = new DivContainer();
    mainContent.fromId("main-content");

    let container = new AbstimmungContainer(mainContent);
    container.render();

};
