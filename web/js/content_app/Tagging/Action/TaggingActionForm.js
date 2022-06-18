import TextBox from "../../../framework/Form/TextBox.js";
import ActionForm from "../../../content/Action/ActionForm.js";
import AdminButton from "../../../framework/AdminButton.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";


export default class TaggingActionForm extends ActionForm {


    constructor(parentContainer) {

        super(parentContainer);

        let local = this;

        let tag = new TextBox(this);
        tag.label = "Tag";

        let btn = new AdminButton(this);
        btn.label = "Save";
        btn.onClick = function () {

            let service = new ServiceRequest("tagging-post");
            service.addParameter("tag", tag.value);
            service.addParameter("content", local.contentId);
            service.onFinished = function () {

                if (local.onSubmit !== null) {
                    local.onSubmit();
                }

            }

            service.sendRequest();

            //(new Debug()).write("tagging-post");
            //local.removeContainer();


        };


    }


}