import DocumentContainer from "../html/Document/Document.js";
import DivContainer from "../html/Content/Div.js";
import BaseContainerList from "../html/Base/BaseList.js";
import DisplayStyle from "../html/Style/Display.js";


let document = new DocumentContainer();
document.onLoaded = function () {

    let cardTitle = new BaseContainerList("card-title");
    let cardContent = new BaseContainerList("card-content");

    let geschaeftTmp = null;

    cardTitle.onClick = function (base) {

        cardContent.display = DisplayStyle.NONE;

        let geschaeft = this.getAttribute("data-geschaeft");
        let id = "geschaeft-content-" + geschaeft;

        if (geschaeft !== geschaeftTmp) {

            let content = new DivContainer();
            content.fromId(id);
            content.display = DisplayStyle.BLOCK;

            geschaeftTmp = geschaeft;
        } else {
            geschaeftTmp = null;
        }

    };


};






