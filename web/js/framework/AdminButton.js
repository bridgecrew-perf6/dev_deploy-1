import ButtonContainer from "../html/Form/Button.js";
import FontWeight from "../html/Style/Font/FontWeight.js";
import ColorStyle from "../html/Style/Color.js";
import CursorStyle from "../html/Style/Cursor.js";

// Button
export default class AdminButton extends ButtonContainer {

    constructor(parentContainer) {

        super(parentContainer);

        this.backgroundColor = ColorStyle.LIGHT_GREY;
        this.fontWeight = FontWeight.BOLD;
        this.paddingPixel = 10;
        this.borderRadiusPixel = 5;
        this.widthPixel = 150;
        this.cursor = CursorStyle.POINTER;

    }

}