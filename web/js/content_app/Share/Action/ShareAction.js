import ContentAction from "../../../content/Action/ContentAction.js";
import ShareTextBox from "../Com/ShareTextBox.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";
import ShareActionView from "./ShareActionView.js";

export default class ShareAction extends ContentAction {

    constructor() {

        super();
        this.label = "Share";
        this.view = ShareActionView;

    }


    onAction(contentId) {

        let form = new ShareTextBox();
        form.contentId = contentId;
        form.render();

        let modal = new AdminModal();
        modal.modalTitle = "Share";
        modal.show(form);

    }


    saveAction() {

    }

}