import CopyTextBox from "../../../framework/Com/Clipboard/CopyTextBox.js";

export default class ShareTextBox extends CopyTextBox {

    set contentId(value) {

        this.value = document.location.href + "?content=" +value;

    }

}
