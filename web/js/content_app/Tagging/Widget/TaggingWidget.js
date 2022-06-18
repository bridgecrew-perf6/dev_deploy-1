import AdminWidget from "../../../framework/Widget/AdminWidget.js";
import ListBox from "../../../framework/ListBox.js";

export default class TaggingWidget extends AdminWidget {


    constructor(parentContainer) {

        super(parentContainer);

        this.widgetTitle="Tagging";

        let listbox = new ListBox(this);
        listbox.label = "Tagging";


    }


}