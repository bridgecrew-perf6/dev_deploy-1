import DocumentContainer from "../html/Document/Document.js";
import DivContainer from "../html/Content/Div.js";
import BaseContainerList from "../html/Base/BaseList.js";
import DisplayStyle from "../html/Style/Display.js";
import ParagraphContainer from "../html/Content/Paragraph.js";
import ParlamentContainer from "./Com/Container/ParlamentContainer.js";


let document = new DocumentContainer();
document.onLoaded = function () {

    let mainContent = new DivContainer();
    mainContent.fromId("main-content");

    let container=new ParlamentContainer(mainContent);
    container.render();


    /*let p=new ParagraphContainer(mainContent);
    p.text="hello";*/

};






