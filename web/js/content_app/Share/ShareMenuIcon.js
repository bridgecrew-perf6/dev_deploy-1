import ToggleButton from "../../framework/Com/Toggle/ToggleButton.js";
import CopyTextBox from "../../framework/Com/Clipboard/CopyTextBox.js";
import Debug from "../../core/Debug/Debug.js";

export default class ShareMenuIcon extends ToggleButton {

    _input;

    _contentId;

    _showCopy = false;

    constructor(parentContainer = null) {

        super(parentContainer);

        this.buttonLabel = "Share";
        this.icon = "share-fill";

        let local = this;

        this.onShow = function () {

            (new Debug()).write(local._showCopy);

            if (local._showCopy) {
                local._input.removeContainer();
                local._showCopy = false;
            } else {
                local._input = new CopyTextBox(local);  // new InputContainer(local);
                local._input.value = document.location.href + "?content=" + local._contentId;
                local._showCopy=true;
            }

        }

    }


    set contentId(value) {

        this._contentId = value;

    }


}