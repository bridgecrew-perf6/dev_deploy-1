import DivContainer from "../../../html/Content/Div.js";
import TextBox from "../../Form/TextBox.js";
import TextInputContainer from "../../../html/Form/TextInput.js";
import BoxSizing from "../../../html/Style/BoxSizing.js";
import DisplayStyle from "../../../html/Style/Display.js";
import FontSize from "../../../html/Style/Font/FontSize.js";
import FontAwesomeIconContainer from "../../FontAwesome/Icon.js";
import BootstrapIcon from "../../Package/BootstrapIcon/BootstrapIcon.js";

export default class AdminSearchTextBox extends DivContainer {

    _input;

    _icon;

    constructor(parentContainer) {

        super(parentContainer);

        this._icon = new BootstrapIcon(this);
        this._icon.icon = "search";

        this._input = new TextInputContainer(this);
        this._input.widthPercent = 100;
        this._input.paddingPixel = 10;
        this._input.boxSizing = BoxSizing.BORDER_BOX;
        this._input.display = DisplayStyle.INLINE_BLOCK;
        this._input.fontSize=FontSize.LARGE;
        this._input.border = "1px solid #ccc";

    }


    get value() {

        return this._input.value;

    }


    // onValueChange
    set onSearchChange(value) {

        this._input.onKeyUp=value;
        //this._input.onChange=value;

    }



}