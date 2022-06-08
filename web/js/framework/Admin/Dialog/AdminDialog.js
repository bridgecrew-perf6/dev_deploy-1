import DialogContainer from "../../../html/Dialog/Dialog.js";
import AdminButton from "../../AdminButton.js";

export default class AdminDialog extends DialogContainer {


    constructor(parentContainer) {

        super(parentContainer);

        let local = this;





        let btn = new AdminButton(this);
        btn.label = "Close";
        btn.onClick = function () {
            local.closeDialog();
        };

    }


}