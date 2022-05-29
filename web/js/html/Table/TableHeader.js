import BaseContainer from "../Base/Base.js";
import ThContainer from "./Th.js";
import TextAlignment from "../Style/Text/TextAlignment.js";
import HyperlinkContainer from "../Hyperlink/Hyperlink.js";

export default class TableHeader extends BaseContainer {

    constructor(parentContainer) {

        super("thead", parentContainer);

    }

    addText(text) {

        let th = new ThContainer(this);
        th.text = text;
        //th.heightPixel = 15;
        //th.textAlignment = TextAlignment.LEFT;
        //th.paddingPixel=5;

    }

    /*addContainer(container) {
        return super.addContainer(container);


    }*/


    addSortingText(text,sorting) {

        let th = new ThContainer(this);
        //th.text = text;
        //th.heightPixel = 15;
        //th.textAlignment = TextAlignment.LEFT;
        //th.paddingPixel=5;

        let hyperlink = new HyperlinkContainer(header);
        hyperlink.text = text;
        hyperlink.onClick=function () {
            local.sorting= sorting;
            local.reloadData();
        };


    }



    addEmpty() {

        this.addText("");

    }

}