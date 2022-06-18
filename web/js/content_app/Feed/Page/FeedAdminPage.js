import IconPageContainer from "../../../framework/Page/IconPageContainer.js";
import FeedForm from "../Content/Feed/FeedForm.js";
import NewMenuIcon from "../../../framework/Com/Menu/Icon/NewMenuIcon.js";
import AdminModal from "../../../framework/Com/Modal/AdminModal.js";
import _FeedScrollDiv from "../Com/Scroll/FeedScrollDiv.js";

export default class FeedAdminPage extends IconPageContainer {

    constructor(parentContainer) {

        super(parentContainer);

        this.pageTitle = "Feed Admin";
        this.pageIcon = "gear";

    }


    render() {


        let btn = new NewMenuIcon(this);
        btn.onClick = function () {

            let form = new FeedForm();
            form.onSubmit = function () {
                modal.close();
                div.reloadData();
            };
            form.render();

            let modal = new AdminModal();
            modal.modalTitle = "New Feed";
            modal.show(form);

        };


        let div=new _FeedScrollDiv(this);
        div.render();



    }


}