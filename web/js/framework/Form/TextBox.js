import TextInputContainer from "../../html/Form/TextInput.js";
import LabelContainer from "../../html/Form/Label.js";
import AdminInput from "./AdminInput.js";
import BoxSizing from "../../html/Style/BoxSizing.js";
import FontSize from "../../html/Style/Font/FontSize.js";
import DisplayStyle from "../../html/Style/Display.js";


export default class TextBox extends AdminInput {


    constructor(parentContainer) {

        super(parentContainer);

        this._label = new LabelContainer(this);
        //this._label.for = "hello123";

        this._input = new TextInputContainer(this);
        //this._input.id = "hello123";
        /*this._input.widthPercent = 100;
        this._input.boxSizing = BoxSizing.BORDER_BOX;
        this._input.display = DisplayStyle.INLINE_BLOCK;
        this._input.fontSize = FontSize.LARGE;
        this._input.border = "1px solid #ccc";
        this._input.autocomplete=false;

        this._input.paddingPixel = 10;
        this._input.borderRadiusPixel = 10;*/

    }


    set readOnly(value) {
        this._input.readOnly = value;
    }


    set type(value) {
        this._input.type = value;
    }


    set onEnter(value) {

        this._input.onKeyUp = function (event) {

            if (event.keyCode === 13) {
                value();
            }
        }

    }


}