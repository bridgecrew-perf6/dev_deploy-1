import ActionView from "../../../content/Action/ActionView.js";
import ShareTextBox from "../Com/ShareTextBox.js";

export default class ShareActionView extends ActionView {

    render() {

        let textBox = new ShareTextBox(this);
        textBox.contentId = this.contentId;
        textBox.render();

    }

}