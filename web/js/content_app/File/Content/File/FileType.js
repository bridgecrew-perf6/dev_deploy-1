import ContentType from "../../../../content/ContentType.js";
import FileView from "./FileView.js";

export default class FileType extends ContentType {

    loadContentType() {
        this.label = "File";
        this.id = "ada4190d-a0c3-4470-9afd-aa9ab11a2e6b";
        this.view = FileView;
    }

}