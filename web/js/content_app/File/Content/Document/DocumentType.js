import ContentType from "../../../../content/ContentType.js";
import DocumentView from "./DocumentView.js";
import DocumentForm from "./DocumentForm.js";
import FileForm from "../File/FileForm.js";

export default class DocumentType extends ContentType {

    loadContentType() {
        this.label = "Dokumente";  // "Document";
        this.id = "09386a3f-c44d-438b-9d7a-6c46d3f9537e";
        this.view = DocumentView;
        this.form = FileForm;  // DocumentForm;
    }

}