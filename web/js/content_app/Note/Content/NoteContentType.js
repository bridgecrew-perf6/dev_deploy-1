import ContentType from "../../../content/ContentType.js";
import NoteContentForm from "./NoteContentForm.js";
import NoteContentView from "./NoteContentView.js";


export default class NoteContentType extends ContentType {

    loadContentType() {

        this.label = "Note";
        this.id = "cddfe2b6-982b-495f-b5fb-ca64e25c9a33";
        this.form = NoteContentForm;
        this.view = NoteContentView;

    }

}


