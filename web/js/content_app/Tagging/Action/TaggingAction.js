import ContentAction from "../../../content/Action/ContentAction.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";
import TaggingActionForm from "./TaggingActionForm.js";
import TaggingActionView from "./TaggingActionView.js";

export default class TaggingAction extends ContentAction {


    constructor() {

        super();
        this.label = "Tagging";
        this.view = TaggingActionView;

    }


    onAction(contentId) {

        let form = new TaggingActionForm()
        form.contentId = contentId;
        form.onSubmit = function () {
            modal.close();
        };

        let modal = new AdminModal();
        modal.modalTitle = "Tagging";
        modal.show(form, "Tagging");

    }


}