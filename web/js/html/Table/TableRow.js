import TdContainer from "./Td.js";
import TrContainer from "./Tr.js";

export default class TableRow extends TrContainer {

    constructor(parentContainer) {

        super(parentContainer);
        /*this.heightPixel = 10;

        this._htmlElement.style.maxHeight = "10px";*/

    }


    addText(text, nowrap = false) {

        let td = new TdContainer(this);
        td.text = text;
        td.nowrap = nowrap;
        //td.paddingPixel = 5;

    }


    addEmpty() {
        this.addText("&nbsp;");
    }


    addContainer(container) {

        let td = new TdContainer();
        td.addContainer(container);

        super.addContainer(td);

        return this;

    }


}