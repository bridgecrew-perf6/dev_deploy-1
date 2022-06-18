import AdminWidget from "../../../framework/Widget/AdminWidget.js";
import NoteContentForm from "../Content/NoteContentForm.js";

export default class NoteWidget extends AdminWidget {

    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle="Note";
        new NoteContentForm(this);

    }

}