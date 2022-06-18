import IconPageContainer from "../../../framework/Page/IconPageContainer.js";
import ImageTimelineForm from "../Content/ImageTimelineForm.js";
import ImageTimelineTable from "../Com/Table/ImageTimelineTable.js";
import Debug from "../../../core/Debug/Debug.js";

export default class ImageTimelineConfigPage extends IconPageContainer {

    constructor(parentContainer) {

        super(parentContainer);

        this.pageTitle = "Image Timeline Config";
        this.pageIcon = "gear";

    }


    render() {

        let form = new ImageTimelineForm(this);
        form.onSubmit = function () {
            (new Debug()).write("submit");
            table.reloadData();
        };

        form.render();

        let table = new ImageTimelineTable(this);
        table.render();

    }


}