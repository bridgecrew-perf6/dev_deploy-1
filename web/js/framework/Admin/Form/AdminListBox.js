import DataListBox from "../../Data/DataListBox.js";
import DisplayStyle from "../../../html/Style/Display.js";
import FontSize from "../../../html/Style/Font/FontSize.js";

export default class AdminListBox extends DataListBox {

    constructor(parentContainer) {

        super(parentContainer);
        //this._select.addCssClass("form-select");

        this._select.widthPercent = 100;
        this._select.display = DisplayStyle.INLINE_BLOCK;
        this._select.border = "1px solid #ccc";
        this._select.boxSizing = "border-box";
        this._select.fontSize = FontSize.LARGE;

        this._select.paddingPixel = 10;
        this._select.borderRadiusPixel = 10;


    }


}