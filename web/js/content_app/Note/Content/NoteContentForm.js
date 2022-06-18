import ContentForm from "../../../content/ContentForm.js";
import Debug from "../../../core/Debug/Debug.js";
import BootstrapTextBox from "../../../framework/Bootstrap/Form/BootstrapTextBox.js";
import HtmlEditor from "../../../framework/Com/HtmlEditor/HtmlEditor.js";

export default class NoteContentForm extends ContentForm {

    _title;

    _text;

    constructor(parentContainer) {

        super(parentContainer);

        this.serviceName = "note-post";

        this._title = new BootstrapTextBox(this);
        this._title.name = "title";
        this._title.label = "Title";

        this._text = new HtmlEditor(this);
        this._text.name = "text";
        this._text.label = "Text";

        this.renderSubmitButton();

    }


    render() {


    }

    onEditForm(dataRow) {

        (new Debug()).write(dataRow);

        this._title.value = dataRow.title;
        this._text.value = dataRow.text;

    }


}
