import ActionView from "../../../content/Action/ActionView.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import UnorderedList from "../../../html/Listing/UnorderedList.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import AdminButton from "../../../framework/AdminButton.js";
import TaggingAction from "./TaggingAction.js";
import TaggingActionForm from "./TaggingActionForm.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";

export default class TaggingActionView extends ActionView {

    _ul;

    render() {

        /*let p = new ParagraphContainer(this);
        p.text = "Tagging " + this.contentId;*/

        let local=this;

        this._ul = new UnorderedList(this);

        this.refresh();

        /*let service = new ServiceRequest("tagging-list");
        service.addParameter("content", this.contentId);
        service.onRow = function (row) {
            ul.addItem(row.tag);
        }
        service.sendRequest();*/

        let btn = new AdminButton(this);
        btn.label="Add";
        btn.onClick=function () {

            /*let action = new TaggingAction();
            action.onAction(local.contentId);*/

            let form = new TaggingActionForm()
            form.contentId = local.contentId;
            form.onSubmit = function () {

                modal.close();
                local.refresh();

                //this.refresh();


            };

            let modal = new AdminModal();
            modal.modalTitle = "Tagging";
            modal.show(form);

        };

    }


    refresh() {

        let local=this;

        local._ul.emptyContainer();

        let service = new ServiceRequest("tagging-list");
        service.addParameter("content", this.contentId);
        service.onDataRow = function (row) {

            local._ul.addItem(row.tag);
            //ul.addItem(row.tag);

        }
        service.sendRequest();


    }



}